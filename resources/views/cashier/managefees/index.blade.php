@extends('layouts.app')

@section('content')

<div class="card shadow mx-auto mt-5" style="width: 80%;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Programs List</h6>
    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-4">Program Title</th>
                        <th class="col-1">Action</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($programs as $program)
                   <tr>
                     <td class="text-center h5 font-weight-bold">{{ $program->description }}</td>
                     <td >

                            <a href="" class="btn btn-sm btn-info btn-icon-split m-1" data-toggle="modal" data-target="#viewFees">
                                <span class="icon text-white-50">
                                    <i class="fas fa-eye"></i>
                                    </span>
                                    <span class="text px-3 d-none d-xl-block">View</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-primary btn-icon-split edit-course m-1" data-toggle="modal" data-target="#manageFees"
                                data-id=""  data-description="">
                                <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                                </span>
                                <span class="text px-3 d-none d-xl-block">Fees</span>
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
