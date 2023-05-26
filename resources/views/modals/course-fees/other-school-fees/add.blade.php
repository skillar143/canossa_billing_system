<div class="modal fade" id="AddOSF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add Other School Fees</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">

                            <select class="custom-select m-1" name="description" required>
                              <option selected disabled value="">Choose Fee</option>
                              @forelse($fees->where('type', 2) as $fee)
                                <option value="{{ $fee->id }}">{{ $fee->description }}</option>
                              @empty
                                <!-- Handle the case when there are no fees with type 1 -->
                              @endforelse
                            </select>
                    </div>

                    <div class="form-group">
                            <input type="text" class="form-control m-1" name="amount" autocomplete="off"
                            placeholder="Amount" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-sm btn-outline-primary" type="submit" >Add</button>
                </div>

            </form>
        </div>
    </div>
</div>

