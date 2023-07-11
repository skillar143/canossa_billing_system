@extends('layouts.app')

@section('content')
<div class="card shadow m-5 animated--grow-in">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Payment List</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="">Student ID</th>
                        <th class="">Name</th>
                        <th class="">Amount</th>
                        <th class="">Mode of Payment</th>
                        <th class="">Status</th>
                        <th class="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $bill)
                    <tr>
                        <td class="text-center font-weight-bold">{{ $bill->student->student_id }}</td>
                        <td class="text-center font-weight-bold">{{ $bill->student->name }}</td>
                        <td class="text-center font-weight-bold">{{ '₱' . number_format($bill->amount, 2, '.', ',') }}</td>
                        <td class="text-center">{{ $bill->getType() }}</td>
                        <td class="text-center text-capitalize">{{ $bill->status }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-outline-success btn-icon-split m-1 payment" data-toggle="modal" data-target="#pay-{{ $bill->payment_type }}-{{$bill->id}}"
                                data-totalbalance="{{ $bill->amount }}" data-billid="{{ $bill->id }}" data-type="#pay-{{ $bill->payment_type }}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-cash-register text-success"></i>
                                </span>
                                <span class="text px-3 d-none d-xl-block">Pay</span>
                            </a>
                        </td>
                    </tr>
                    @include('modals.payments.full-payment')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $(document).on('click', '.payment', function() {
        var paymentType = $(this).data('type');
        var billId = $(this).data('billid');
        var modal = paymentType+"-"+billId;
        var $modal = $(modal);

console.log(modal);

        $modal.find('.total').val('₱' + $(this).data('totalbalance').toFixed(2));
        $modal.find('.total-input').val($(this).data('totalbalance'));
        $modal.find('.balance').val('₱' +$(this).data('totalbalance').toFixed(2));

        var totalFullPayment = parseFloat($modal.find('.total').val().replace(/[^\d.]/g, ''));
var totalPaid = parseFloat($modal.find('.totalpaid').val().replace(/[^\d.]/g, ''));
var balance = totalFullPayment - totalPaid;
balance = (balance < 0) ? 0 : balance;
$modal.find('.balance').val('₱' + balance.toFixed(2));

$modal.find('.cash').on('input', function() {
    var totalPayment = parseFloat($(this).val());
    totalPayment = isNaN(totalPayment) ? 0 : totalPayment; // Set totalPayment to 0 if it is NaN
    var change = totalPayment - balance;
    change = (change < 0) ? 0 : change;
    $modal.find('.change').val('₱' + change.toFixed(2));
});

        // Update form action attribute with the billId value
        $modal.find('.payment-form').attr('action', function(index, oldAction) {
            return oldAction.replace(/\/\d+$/, '/' + billId);
        });

        if (paymentType == "#pay-1") {
            $modal.find('.paymentType').text("Installment");
        } else if (paymentType == "#pay-0") {
            $modal.find('.paymentType').text("Full Payment");

        }
    });
});


</script>
@endsection
