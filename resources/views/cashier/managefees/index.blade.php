@extends('layouts.app')

@section('content')

<div class="card shadow mx-auto mt-5 animated--grow-in" style="width: 80%;">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Programs List</h6>
    </div>
    <div class="card-body p-4">
        <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="col-8">Program Title</th>
                        <th class="col-1">Action</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($programs as $program)
                   <tr>
                     <td class="text-center h5 font-weight-bold">{{ $program->description }}</td>
                     <td class="text-center">

                            <a href="{{ route('managefees.show',$program->id) }}" class="btn btn-sm btn-outline-info btn-icon-split m-1">
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
