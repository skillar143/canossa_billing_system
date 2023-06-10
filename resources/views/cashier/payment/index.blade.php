@extends('layouts.app')

@section('content')



<div class="card shadow m-5 animated--grow-in">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Payment List</h6>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered"  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Student ID</th>
                        <th class="col-3">Name</th>
                        <th class="col-1">Payment</th>
                    </tr>
                </thead>
                <tbody >

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
