<div class="">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="btn btn-outline-primary btn-sm  mx-1 active mx-1" id="pills-{{ $y }}{{ $s = "1" }}-tab" data-toggle="pill"
            data-target="#pills-{{ $y }}{{ $s = "1" }}" type="button" role="tab" aria-controls="pills-{{ $y }}{{ $s = "1" }}" aria-selected="true">1<sup>st</sup> Semester</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="btn btn-outline-primary btn-sm  mx-1 mx-1" id="pills-{{ $y }}{{ $s = "2" }}-tab" data-toggle="pill"
            data-target="#pills-{{ $y }}{{ $s = "2" }}" type="button" role="tab" aria-controls="pills-{{ $y }}{{ $s = "2" }}" aria-selected="false"> 2<sup>nd</sup> Semester</button>
        </li>
    </ul>
</div>

<hr class="sidebar-divider d-none d-md-block">
<div class="card-body">

    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active " id="pills-{{ $y }}{{ $s = "1" }}" role="tabpanel" aria-labelledby="pills-{{ $y }}{{ $s = "1" }}-tab">
          <div class="d-flex align-content-stretch flex-wrap">

              @include('panel-view/managefees/tuition-fee._index', ['semester' => $s])
              @include('panel-view/managefees/other-school-fee._index', ['semester' => $s])
              @include('panel-view/managefees/computer-fee._index', ['semester' => $s])
              @include('panel-view/managefees/special-fee._index', ['semester' => $s])

              @if ($course->rle_status)
              @include('panel-view/managefees/rle-fee._index', ['semester' => $s])
              @endif


          </div>
      </div>

      <div class="tab-pane fade" id="pills-{{ $y }}{{ $s = "2" }}" role="tabpanel" aria-labelledby="pills-{{ $y }}{{ $s = "2" }}-tab">
          <div class="d-flex align-content-stretch flex-wrap">

            @include('panel-view/managefees/tuition-fee._index', ['semester' => $s])
            @include('panel-view/managefees/other-school-fee._index', ['semester' => $s])
            @include('panel-view/managefees/computer-fee._index', ['semester' => $s])
            @include('panel-view/managefees/special-fee._index', ['semester' => $s])

            @if ($course->rle_status)
            @include('panel-view/managefees/rle-fee._index', ['semester' => $s])
            @endif

          </div>
      </div>
    </div>
</div>


