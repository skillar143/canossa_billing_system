<div class="modal fade pay-modal" id="pay-{{ $bill->payment_type }}-{{$bill->id}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-0 paymentType"></h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>

            <form action="{{ route('payment.store', $bill->id) }}" method="POST" class="payment-form">
                @method('PUT')
                @csrf
                <div class="modal-body p-5">
                    <div class="form-group">
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="">Total Fee</label>
                            <input type="text" class="form-control w-50 ml-auto total" value="" readonly>
                            <input type="hidden" name="balance" class="form-control w-50 ml-auto total-input" value="">
                        </div>
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="">Cash</label>
                            <input type="number" name="cash" class="form-control w-50 ml-auto cash" value="">
                        </div>
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="">Change</label>
                            <input type="text" class="form-control w-50 ml-auto change" value="{{ '₱' . number_format(0, 2, '.', ',') }}" disabled>
                        </div>
                        <hr class="sidebar-divider">
                        
                        @php
                        $i = 1;
                        $totalpay = 0;
                        @endphp

                        @foreach ($bill->studentPayments as $payment)
                            @php
                                $ordinal = ($i === 1) ? 'st' : (($i === 2) ? 'nd' : (($i === 3) ? 'rd' : 'th'));
                                $totalpay += $payment->cash;
                            @endphp

                            <div class="form-group flex d-flex">
                                <label class="mx-2 mt-2 h5" for="">{{$i . $ordinal}} Payment</label>
                                <input type="text" class="form-control w-50 ml-auto" value=" {{ '₱' . number_format($payment->cash, 2, '.', ',') }}" disabled>
                               
                            </div>
                        
                            @php
                                $i++;
                            @endphp
                        @endforeach
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="">Total Paid</label>
                            <input type="text" class="form-control w-50 ml-auto totalpaid" value=" {{ '₱' . number_format($totalpay, 2, '.', ',') }}" disabled>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="">Balance</label>
                            <input type="text" class="form-control w-50 ml-auto balance" value="" disabled>
                        </div>
                    </div> 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-outline-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
