<div class="modal fade" id="editDiscount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Edit Discount</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form id="discountUpdate" method="post">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control m-1" name="description" autocomplete="off"
                           id="edes"  required>

                            <input type="text" class="form-control m-1" name="amount" autocomplete="off"
                           id="eamt"  required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-sm btn-outline-success" onclick="document.getElementById('discountUpdate').submit()">Update</button>
                </div>

            </form>
        </div>
    </div>
</div>
