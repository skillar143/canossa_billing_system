<div class="card m-1 shadow w-100">
    <div class="card-body">
        <div class="d-flex">
            <h5 class="card-title mr-3 text-dark">Other School Fees</h5>
            <div class="ml-auto">
                <a href="#" class="btn btn-sm btn-outline-primary btn-icon-split add-feeOSF" data-toggle="modal" data-target="#addFeeOSF"
                data-type="2" data-courseid="{{ $course->id }}" data-sem="{{ $semester }}" data-year="{{ $year }}">
                    <span class="icon">
                        <i class="fas fa-plus text-primary"></i>
                    </span>
                    <span class="text">Add Fee </span>
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="border-1">
                    @php
                    $totalAmount = 0; // Variable to store the total amount
                    @endphp
                    @forelse ($coursefees->where('semester', $semester)->where('year', $year)->where('type', '2') as $cfees )
                    <tr>
                        <td>{{ $cfees->fees->description }}</td>
                        <td>{{ '₱' .number_format($cfees->fees->amount, 2, '.', ',') }}</td>

                        <td>
                            <a href="#" class="btn btn-sm btn-outline-danger  delete-cfee m-1" data-toggle="modal" data-target="#deleteFee"
                            data-courseid="{{ $course->id }}" data-id="{{$cfees->id}}"  data-description="{{ $cfees->fees->description }}" data-amount="{{ '₱' .number_format($cfees->fees->amount, 2, '.', ',') }}" >
                                <i class="fas fa-minus text-danger"></i>
                            </a>

                        </td>
                    </tr>
                    @php
                     $totalAmount += $cfees->fees->amount; // Increment total amount
                     @endphp
                    @empty
                        <tr>
                            <td colspan="4">
                                <p>No Subject</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>

                        <th>{{ '₱' .number_format($totalAmount, 2, '.', ',') }}</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>






