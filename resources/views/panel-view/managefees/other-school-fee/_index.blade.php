<div class="card m-1 shadow" style="width: fit-content;">
    <div class="card-body">
        <div class="d-flex">
            <h5 class="card-title">Other School Fees</h5>
            <div class="ml-auto">
                <a href="#" class="btn btn-sm btn-outline-primary btn-icon-split add-fee" data-toggle="modal" data-target="#addFee"
                data-type="2">
                    <span class="icon">
                        <i class="fas fa-plus text-primary"></i>
                    </span>
                    <span class="text">Add Fee</span>
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
                    <tr>
                        <td>Registration</td>
                        <td>P300</td>
                        <td>
                            <a class="btn btn-sm btn-outline-success  m-1  edit-fee" data-toggle="modal" data-target="#editFee"
                            data-id=""  data-description="" data-amount="" >
                                    <i class="fas fa-pen text-success"></i>
                            </a>

                            <a href="#" class="btn btn-sm btn-outline-danger  delete-fee m-1" data-toggle="modal" data-target="#deleteFee"
                            data-id=""  data-description="" data-amount="" >
                                <i class="fas fa-minus text-danger"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <th>P38180</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
