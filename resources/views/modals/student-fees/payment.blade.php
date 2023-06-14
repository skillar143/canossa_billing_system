<div class="modal fade" id="studentBill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel"></h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('billing.store', $student->id ) }}" method="post" id="billing-form">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="tuition-total-input">Tuition</label>
                            <input type="text" class="form-control w-50 ml-auto" id="tuition-total-input" value="{{ '₱' . number_format(($total_ttn), 2, '.', ',') }}" disabled>
                        </div>
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="discount-select">Discount</label>
                            <select name="discount-select" id="discount-select" class="form-control w-50 ml-auto">
                                <option value="0" selected>No Discount</option>
                                @foreach ($discounts as $discount)
                                <option value="{{ $discount->amount }}">{{ $discount->description }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="discounted-tuition-input">Discounted Tuition</label>
                            <input type="text" class="form-control w-50 ml-auto" id="discounted-tuition-input" value="{{ '₱' . number_format(($total_ttn), 2, '.', ',') }}" disabled>
                        </div>
                        <hr class="sidebar-divider">

                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="individual-total-input-cf">Computer Fees</label>
                            <input type="text" class="form-control w-50 ml-auto" id="individual-total-input-cf" value="{{ '₱' . number_format(($total_cf), 2, '.', ',') }}" disabled>
                        </div>

                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="individual-total-input-sf">Special Fees</label>
                            <input type="text" class="form-control w-50 ml-auto" id="individual-total-input-sf" value="{{ '₱' . number_format(($total_sf), 2, '.', ',') }}" disabled>
                        </div>

                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="individual-total-input-ofs">Other School Fees</label>
                            <input type="text" class="form-control w-50 ml-auto" id="individual-total-input-ofs" value="{{ '₱' . number_format(($total_ofs), 2, '.', ',') }}" disabled>
                        </div>
                        <hr class="sidebar-divider">
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="overall-total">Total</label>
                            <input type="text" class="form-control w-50 ml-auto" id="overall-total-input" value="{{ '₱' . number_format($total_fees, 2, '.', ',') }}" readonly>
                            <input type="text" name="total_bill" class="form-control w-50 ml-auto" id="overall-total-inp" value="{{$total_fees}}" readonly>
                        </div>
                        <div class="form-group flex d-flex">
                            <label class="mx-2 mt-2 h5" for="payment-type-select">Type of Payment</label>
                            <select name="payment_type" id="payment-type-select" class="form-control w-50 ml-auto">
                                <option value="0" selected>Full Payment</option>
                                <option value="1">Installment (per term)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-outline-primary" type="submit">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
