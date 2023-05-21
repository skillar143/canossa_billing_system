
  <div class="">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="active btn btn-outline-primary btn-sm mx-1" id="pills-home-tab" data-toggle="pill"
            data-target="#pills-sf" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1<sup>st</sup> Semester</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="btn btn-outline-primary btn-sm mx-1" id="pills-profile-tab" data-toggle="pill"
            data-target="#pills-ss" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2<sup>nd</sup> Semester</button>
        </li>
      </ul>
  </div>
  <hr class="sidebar-divider d-none d-md-block">
  <div class="card-body">

      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-sf" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="d-flex align-content-stretch flex-wrap">

                @include('modals/managefees/tuition-fee/secondyear._firstsem')

            </div>
        </div>

        <div class="tab-pane fade" id="pills-ss" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="d-flex align-content-stretch">

                @include('modals/managefees/tuition-fee/secondyear._secondsem')

            </div>
        </div>
      </div>
  </div>

