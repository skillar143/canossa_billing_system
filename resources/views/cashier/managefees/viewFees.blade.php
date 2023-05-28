@extends('layouts.app')

@section('content')

<p class="h1">
    {{ $course->description }}
</p>

<div class="card shadow mx-auto mt-5 animated--grow-in">
    <div class="card-body p-4">
        <div class="row" >
            <div class="col-2 shadow-sm py-2">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @for ($y = 1; $y <= 4; $y++)
                    @php
                        $ordinal = ($y === 1) ? 'st' : (($y === 2) ? 'nd' : (($y === 3) ? 'rd' : 'th'));
                        $active = ($y === 1) ? 'active' : '';
                    @endphp
                    <a class="nav-link {{ $active }}" id="v-pills-{{$y}}-tab" data-toggle="pill" href="#pills-{{$y}}" role="tab" aria-controls="v-pills-{{$y}}" aria-selected="true">{{ $y }}<sup>{{ $ordinal }}</sup> Year</a>
                @endfor

              </div>
            </div>
            <div class="col-10">
              <div class="tab-content" id="v-pills-tabContent">
                @for ($y = 1; $y <= 4; $y++)
                    @php
                        $active = ($y === 1) ? 'show active' : '';
                    @endphp
                    <div class="tab-pane fade {{ $active }}" id="pills-{{$y}}" role="tabpanel" aria-labelledby="pills-{{$y}}-tab"> @include('panel-view/managefees._year_fees', ['year' => $y]) </div>
                @endfor
              </div>
            </div>
          </div>


    </div>
</div>







@endsection

@section('modals')

    @include('modals/course-fees.add')

@endsection
