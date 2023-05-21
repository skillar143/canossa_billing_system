@extends('layouts.app')

@section('content')

<p class="h1">
    {{ $course->description }}
</p>

<div class="card shadow mx-auto mt-5 animated--grow-in" style="width: 80%;">
    <div class="card-body p-4">
        <div class="row">
            <div class="col-2 shadow-sm p-2 ">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#pills-first" role="tab" aria-controls="v-pills-home" aria-selected="true">1<sup>st</sup> Year</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#pills-second" role="tab" aria-controls="v-pills-profile" aria-selected="false">2<sup>nd</sup> Year</a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#pills-third" role="tab" aria-controls="v-pills-messages" aria-selected="false">3<sup>rd</sup> Year</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#pills-fourth" role="tab" aria-controls="v-pills-settings" aria-selected="false">4<sup>th</sup> Year</a>
              </div>
            </div>
            <div class="col-10">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="pills-first" role="tabpanel" aria-labelledby="pills-home-tab"> @include('modals/managefees._firstyear_fees') </div>
                <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="v-pills-profile-tab">@include('modals/managefees._secondyear_fees')</div>
                <div class="tab-pane fade" id="pills-third" role="tabpanel" aria-labelledby="v-pills-messages-tab">@include('modals/managefees._thirdyear_fees')</div>
                <div class="tab-pane fade" id="pills-fourth" role="tabpanel" aria-labelledby="v-pills-settings-tab">@include('modals/managefees._fourthyear_fees')</div>
              </div>
            </div>
          </div>


    </div>
</div>

@include('modals/managefees.unitCost')
<div class="modal fade" id="cost_per_unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="exampleModalLabel">Change per Unit Cost</h5>
                <button class="close text-light" type="button" data-dismiss="modal" aria-label="Close">
                <i class="fa fa-window-close" aria-hidden="true"></i>
                </button>
            </div>
            <form action="{{ route('managefees.unit',$course->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="modal-body">
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





@endsection
