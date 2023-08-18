<div class="modal fade" id="changePass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xs modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-0">Change Password</h3>
                <button class="close " type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form  action="{{ route('change.pass', Auth::user()->username ) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body p-5" id="subject">
                    <div class="form-group">
                        <label for="inputPasswordOld">Current Password</label>
                        <input type="password" class="form-control" id="inputPasswordOld" name="currPass" required="">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNew">New Password</label>
                        <input type="password" class="form-control" id="inputPasswordNew" name="newPass" required="">
                        <span class="form-text small text-muted">
                                The password must be 8-20 characters, and must <em>not</em> contain spaces.
                            </span>
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordNewVerify">Verify</label>
                        <input type="password" class="form-control" id="inputPasswordNewVerify" name="verifyPass" required="">
                        <span class="form-text small text-muted">
                                To confirm, type the new password again.
                            </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-outline-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-outline-success" >Save</button>
                </div>

            </form>
        </div>
    </div>
</div>



