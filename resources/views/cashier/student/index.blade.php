@extends('layouts.app')

@section('content')



<div class="card shadow m-5 animated--grow-in">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Student List</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-2">Student id</th>
                        <th class="col-4">Name</th>
                        <th class="col-4">Information</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                   <tr>
                     <td class="text-center  font-weight-bold">{{ $student->student_id }}</td>
                     <td class="text-center  font-weight-bold">{{ $student->name }}</td>
                     <td>
                        <ul style="list-style: none">
                            <li>Contact #: {{ $student->cellphone }}</li>
                            <li>Address: {{ $student->address }}</li>
                        </ul>
                     </td>
                   </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
