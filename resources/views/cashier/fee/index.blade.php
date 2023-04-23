@extends('layouts.app')

@section('content')

<div class="card shadow mx-auto mt-5 animated--grow-in" style="width: 80%;">
    <div class="card-header py-3 d-flex">

            <h6 class="m-0 font-weight-bold text-primary">School Fee</h6>

        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-outline-primary btn-icon-split" data-toggle="modal" data-target="#AddFee">
                <span class="icon">
                    <i class="fas fa-plus text-primary"></i>
                </span>
                <span class="text">Add Fee</span>
            </a>
        </div>

    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-3">Description</th>
                        <th class="col-1">Amount</th>
                        <th class="col-1">Action</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($fees as $fee)
                   <tr>
                     <td class="text-center font-weight-bold">{{ $fee->description }}</td>
                     <td class="text-center font-weight-bold">{{ $fee->amount }}</td>
                     <td >

                            <a class="btn btn-sm btn-outline-success btn-icon-split m-1  edit-fee" data-toggle="modal" data-target="#editFee"
                            data-id="{{ $fee->id }}"  data-description="{{ $fee->description }}" data-amount="{{ $fee->amount }}" >
                                <span class="icon">
                                    <i class="fas fa-pen text-success"></i>
                                    </span>
                                    <span class="text px-3 d-none d-xl-block">Edit</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-outline-danger btn-icon-split delete-fee m-1" data-toggle="modal" data-target="#deleteFee"
                            data-id="{{ $fee->id }}"  data-description="{{ $fee->description }}" data-amount="{{ $fee->amount }}" >
                                <span class="icon">
                                <i class="fas fa-minus text-danger"></i>
                                </span>
                                <span class="text px-3 d-none d-xl-block">Delete</span>
                            </a>

                     </td>
                   </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
