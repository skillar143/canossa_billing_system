<div class="modal fade" id="manageFees" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Add Subject To First Year</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>

                <div class="modal-body" id="subject">
                    <div class="card">
                        <div class="card-header">
                          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                <button class="nav-link active border-0 mx-1" id="pills-home-tab" data-toggle="pill"
                                  data-target="#add-fee-first" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1<sup>st</sup> Year</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 mx-1" id="pills-profile-tab" data-toggle="pill"
                                  data-target="#add-fee-second" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2<sup>nd</sup> Year</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 mx-1" id="pills-profile-tab" data-toggle="pill"
                                  data-target="#add-fee-third" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">3<sup>nd</sup> Year</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                <button class="nav-link border-0 mx-1" id="pills-profile-tab" data-toggle="pill"
                                  data-target="#add-fee-fourth" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">4<sup>nd</sup> Year</button>
                              </li>
                            </ul>
                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="add-fee-first" role="tabpanel" aria-labelledby="pills-home-tab">@include('modals/managefees._form_fees')</div>
                              <div class="tab-pane fade" id="add-fee-second" role="tabpanel" aria-labelledby="pills-profile-tab">@include('modals/managefees._form_fees')</div>
                              <div class="tab-pane fade" id="add-fee-third" role="tabpanel" aria-labelledby="pills-profile-tab">@include('modals/managefees._form_fees')</div>
                              <div class="tab-pane fade" id="add-fee-fourth" role="tabpanel" aria-labelledby="pills-profile-tab">@include('modals/managefees._form_fees')</div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- no modal footer --}}
        </div>
    </div>
</div>


