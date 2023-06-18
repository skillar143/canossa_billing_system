@extends('layouts.app')

@section('content')

<div class="card shadow m-5 mx-auto animated--grow-in w-50 center">
    <div class="card-header py-3 d-flex ">
        <div class="">
            <h6 class="m-0 font-weight-bold text-primary">{{$student->name ." (". $student->student_id .")" }}</h6>
        </div>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            @php
            $total_ofs = 0;
            $total_cf = 0;
            $total_sf = 0;
            $total_ttn = $per_unit * $units;
            $total_rle = $per_rle * $rle;
            @endphp
            <table class="table">
                <tbody>
                    {{-- curriculum --}}
                    <tr>
                        <th class="table-secondary" colspan="2">Curriculum</th>
                    </tr>
                    <tr>
                        <td class="col-2">Per Unit</td>
                        <td class="col-2">{{ '₱' . number_format($per_unit, 2, '.', ',') }}</td>
                    </tr>
                    <tr>
                        <td class="col-2">Units</td>
                        <td class="col-2">{{ $units }}</td>
                    </tr>
                    <tr>
                        <th class="col-2">Tuition</th>
                        <th class="col-2">{{ '₱' . number_format(($total_ttn), 2, '.', ',') }}</th>
                    </tr>

                    {{-- rle --}}
                    @if ($course->rle_status)
                    <tr>
                        <th class="table-secondary" colspan="2">Related Learning Experience(RLE)</th>
                    </tr>
                    <tr>
                        <td>Per Hour</td>
                        <td>{{ '₱' . number_format($per_rle, 2, '.', ',') }}</td>
                    </tr>
                    <tr>
                        <td>Hours</td>
                        <td>{{ $rle }}</td>
                    </tr>
                    <tr>
                        <th>Total RLE</th>
                        <th>{{ '₱' . number_format(($total_rle), 2, '.', ',') }}</th>
                    </tr>
                    @endif

                    {{-- Other School Fees --}}
                    <tr>
                        <th class="table-secondary" colspan="2">Other School Fees</th>
                    </tr>
                    @forelse ($studentfees->where('type', '2') as $fee)
                    <tr id="ofs-{{ $fee->id }}">
                        <td>{{ $fee->fees->description }}</td>
                        <td>{{ '₱' . number_format($fee->fees->amount, 2, '.', ',') }}
                            <button class="btn btn-sm btn-danger ml-5 mr-0 remove-fee" data-id="{{ $fee->id }}"
                                data-type="ofs"><i class="fas fa-ban"></i></button>
                        </td>
                    </tr>
                    @php
                    $total_ofs += $fee->fees->amount;
                    @endphp
                    @empty
                    <tr>
                        <td colspan="2">
                            <p>No fees</p>
                        </td>
                    </tr>
                    @endforelse
                    <tr>
                        <th>Total</th>
                        <th id="individual-total-ofs">{{ '₱' . number_format($total_ofs, 2, '.', ',') }}</th>
                    </tr>

                    {{-- Special fees --}}
                    <tr>
                        <th class="table-secondary" colspan="2">Special Fees</th>
                    </tr>
                    @forelse ($studentfees->where('type', '1') as $fee)
                    <tr id="sf-{{ $fee->id }}">
                        <td>{{ $fee->fees->description }}</td>
                        <td>{{ '₱' . number_format($fee->fees->amount, 2, '.', ',') }}
                            <button class="btn btn-sm btn-danger ml-5 mr-0 remove-fee" data-id="{{ $fee->id }}"
                                data-type="sf"><i class="fas fa-ban"></i></button>
                        </td>
                    </tr>
                    @php
                    $total_sf += $fee->fees->amount;
                    @endphp
                    @empty
                    <tr>
                        <td colspan="2">
                            <p>No fees</p>
                        </td>
                    </tr>
                    @endforelse
                    <tr>
                        <th>Total</th>
                        <th id="individual-total-sf">{{ '₱' . number_format($total_sf, 2, '.', ',') }}</th>
                    </tr>

                    {{-- Computer Fees --}}
                    <tr>
                        <th class="table-secondary" colspan="2">Computer Fees</th>
                    </tr>
                    @forelse ($studentfees->where('type', '0') as $fee)
                    <tr id="cf-{{ $fee->id }}">
                        <td>{{ $fee->fees->description }}</td>
                        <td>{{ '₱' . number_format($fee->fees->amount, 2, '.', ',') }}
                            <button class="btn btn-sm btn-danger ml-5 mr-0 remove-fee" data-id="{{ $fee->id }}"
                                data-type="cf"><i class="fas fa-ban"></i></button>
                        </td>
                    </tr>
                    @php
                    $total_cf += $fee->fees->amount;
                    @endphp
                    @empty
                    <tr>
                        <td colspan="2">
                            <p>No fees</p>
                        </td>
                    </tr>
                    @endforelse
                    <tr>
                        <th>Total</th>
                        <th id="individual-total-cf">{{ '₱' . number_format($total_cf, 2, '.', ',') }}</th>
                    </tr>

                    <tr class="table-primary" >
                        <th>Total Fees</th>
                        @php
                        $total_fees = $total_ttn + $total_rle + $total_ofs + $total_cf + $total_sf;
                        @endphp
                        <th id="overall-total">{{ '₱' . number_format($total_fees, 2, '.', ',') }}</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal-footer">
        <a class="btn btn-sm btn-outline-success btn-icon-split m-1" data-toggle="modal" data-target="#studentBill">
            <span class="icon">
                <i class="fas fa-money-check-alt fa-lg"></i>
                </span>
                <span class="text px-3">Check Out</span>
        </a>
    </div>
</div>

@include('modals.student-fees.payment')

@endsection

@section('scripts')

<script>
    $(document).ready(function() {
        $('.remove-fee').click(function() {
            var feeId = $(this).data('id');
            var feeType = $(this).data('type');
            // Remove the fee row from the table
            $('#' + feeType + '-' + feeId).remove();
            // Update the individual total
            var individualTotal = parseFloat($('#individual-total-' + feeType).text().replace(/₱|,/g, ''));
            var feeAmount = parseFloat($(this).closest('tr').find('td:eq(1)').text().replace(/₱|,/g, ''));
            individualTotal -= feeAmount;
            $('#individual-total-' + feeType).text('₱' + individualTotal.toFixed(2));
            $('#individual-total-input-' + feeType).val(individualTotal.toFixed(2));
            // Update the overall total
            var overallTotal = parseFloat($('#overall-total').text().replace(/₱|,/g, ''));
            overallTotal -= feeAmount;
            $('#overall-total').text('₱' + overallTotal.toFixed(2));
            $('#overall-total-input').val('₱' + overallTotal.toFixed(2));
            $('#overall-total-inp').val(overallTotal);
        });
    });



    $(document).ready(function() {
  $('#discount-select').change(function() {
    var tuitionAmount = parseFloat($('#tuition-total-input').val().replace(/[^\d.]/g, ''));
    var rleAmount = parseFloat($('#rle-total-input').val().replace(/[^\d.]/g, ''));
    var cfTotal = parseFloat($('#individual-total-input-cf').val().replace(/[^\d.]/g, ''));
    var sfTotal = parseFloat($('#individual-total-input-sf').val().replace(/[^\d.]/g, ''));
    var ofsTotal = parseFloat($('#individual-total-input-ofs').val().replace(/[^\d.]/g, ''));
    var selectedDiscount = parseFloat($(this).val()) / 100; // Convert the discount amount to a percentage
    var discountAmount = tuitionAmount * selectedDiscount; // Calculate the discount amount
    var discountedTuition = tuitionAmount - discountAmount;
    var totalFees = discountedTuition + rleAmount + cfTotal + sfTotal + ofsTotal ;

    $('#discounted-tuition-input').val('₱' + discountedTuition.toFixed(2));
    $('#overall-total-input').val('₱' + totalFees.toFixed(2));
    $('#overall-total-inp').val(totalFees);
  });
});


</script>
@endsection
