@extends('layouts.app')

@section('content')



<div class="card shadow m-5 animated--grow-in">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Student id</th>
                        <th class="col-4">Name</th>
                        <th class="col-1">Payment</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                   <tr>
                     <td class="font-weight-bold">{{ $student->student_id }}</td>
                     <td class="font-weight-bold">{{ $student->name }}</td>
                     <td>
                        <a href="{{ route('studentfee.view', $student->id ) }}" class="btn btn-sm btn-outline-info btn-icon-split m-1">
                            <span class="icon text-white-50 ">
                                <i class="fas fa-eye text-info"></i>
                                </span>
                                <span class="text px-3 d-none d-xl-block">View</span>
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


