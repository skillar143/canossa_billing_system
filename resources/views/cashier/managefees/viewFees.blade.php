@extends('layouts.app')

@section('content')

<p class="h1">
    {{ $course->description }}
</p>

<div class="card shadow mx-auto mt-5 animated--grow-in" style="width: 80%;">
    <div class="card-header py-3">

        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="btn btn-outline-primary btn-sm  mx-1" id="pills-home-tab" data-toggle="pill"
                data-target="#pills-first" type="button" role="tab" aria-controls="pills-home" aria-selected="true">1<sup>st</sup> Year</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn btn-outline-primary btn-sm  mx-1" id="pills-profile-tab" data-toggle="pill"
                data-target="#pills-second" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">2<sup>nd</sup> Year</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="btn btn-outline-primary btn-sm mx-1" id="pills-contact-tab" data-toggle="pill"
                data-target="#pills-third" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">3<sup>rd</sup> Year</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="btn btn-outline-primary btn-sm mx-1" id="pills-contact-tab" data-toggle="pill"
                  data-target="#pills-fourth" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">4<sup>th</sup> Year</button>
              </li>
          </ul>
    </div>

    <div class="card-body p-4">
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane animated--grow-in show active"  role="tabpanel" aria-labelledby="pills-home-tab">
               <p class="h4 text-center"><strong>Choose year Above</strong></p>
            </div>

            <div class="tab-pane animated--grow-in" id="pills-first" role="tabpanel" aria-labelledby="pills-home-tab"> @include('modals/managefees._firstyear_fees') </div>
            <div class="tab-pane animated--grow-in" id="pills-second" role="tabpanel" aria-labelledby="pills-profile-tab">@include('modals/managefees._secondyear_fees')</div>
            <div class="tab-pane animated--grow-in" id="pills-third" role="tabpanel" aria-labelledby="pills-contact-tab">@include('modals/managefees._thirdyear_fees')</div>
            <div class="tab-pane animated--grow-in" id="pills-fourth" role="tabpanel" aria-labelledby="pills-contact-tab">@include('modals/managefees._fourthyear_fees')</div>
        </div>
    </div>
</div>

@endsection
