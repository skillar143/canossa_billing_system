<div class="modal fade" id="deleteFee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-light" id="exampleModalLabel">Delete Discount</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="courseDelete" method="post">
                @method('DELETE')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control m-1" name="description" disabled
                           id="cdesFee"  required>

                            <input type="text" class="form-control m-1" name="amount" disabled
                           id="camtFee"  required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="document.getElementById('courseDelete').submit()">Delete</button>
                </div>

            </form>
        </div>
    </div>
</div>
