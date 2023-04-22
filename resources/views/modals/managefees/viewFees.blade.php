<div class="modal fade" id="viewFees" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">

                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link border-0 bg-primary mx-1" id="pills-home-tab" data-toggle="pill"
                        data-target="#pills-first" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1<sup>st</sup> Year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link border-0 bg-primary mx-1" id="pills-profile-tab" data-toggle="pill"
                        data-target="#pills-second" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2<sup>nd</sup> Year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link border-0 bg-primary mx-1" id="pills-contact-tab" data-toggle="pill"
                        data-target="#pills-third" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3<sup>rd</sup> Year</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border-0 bg-primary mx-1" id="pills-contact-tab" data-toggle="pill"
                          data-target="#pills-fourth" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">4<sup>th</sup> Year</button>
                      </li>
                  </ul>

                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="pills-home-tab">
                               <p class="h4 text-center"><strong>Choose year Above</strong></p>
                            </div>

                            <div class="tab-pane fade" id="pills-first" role="tabpanel" aria-labelledby="pills-home-tab"> @include('modals/managefees._firstyear_fees') </div>
                            <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-profile-tab">@include('modals/managefees._secondyear_fees')</div>
                            <div class="tab-pane fade" id="pills-third" role="tabpanel" aria-labelledby="pills-contact-tab">@include('modals/managefees._thirdyear_fees')</div>
                            <div class="tab-pane fade" id="pills-fourth" role="tabpanel" aria-labelledby="pills-contact-tab">@include('modals/managefees._fourthyear_fees')</div>
                          </div>
                    </div>
                </div>
                <div class="modal-footer">

                </div>


        </div>
    </div>
</div>
