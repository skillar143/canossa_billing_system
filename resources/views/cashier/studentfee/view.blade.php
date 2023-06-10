@extends('layouts.app')

@section('content')



<div class="card shadow m-5 animated--grow-in">
    <div class="card-header py-3 d-flex">
        {{-- <div class="ml-auto">
            <h5 class="m-0 font-weight-bold text-center">{{ $student->program->description }}</h5>
        </div> --}}
        <div class="ml-auto">
            <h6 class="m-0 font-weight-bold text-mute">{{ $student->student_id }}</h6>
        </div>
    </div>
    <div class="card-body">

        <div class="table-responsive">
            <table class="table">

                    <tbody>
                        <tr>
                            <th>Per Unit</th>
                            <th>{{ '₱' .number_format($per_unit, 2, '.', ',') }}</th>
                        </tr>
                        <tr>
                            <th>Units</th>
                            <th>Units</th>
                        </tr>
                        <tr>
                            <th>Tuition</th>
                            <th>Units</th>
                        </tr>
                        <!-- Section 1 -->
                        <tr>
                          <th class="table-primary" colspan="2">Other School Fees</th>
                        </tr>
                        @forelse ($studentfees->where('type', '2') as $fee)
                        <tr>
                            <td>{{ $fee->fees->description }}</td>
                            <td>{{ '₱' .number_format($fee->fees->amount, 2, '.', ',') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">
                                <p>No fees</p>
                            </td>
                        </tr>
                         @endforelse

                        <!-- Section 2 -->
                        <tr>
                          <th class="table-primary" colspan="2">Special Fees</th>
                        </tr>
                        @forelse ($studentfees->where('type', '1') as $fee)
                        <tr>
                            <td>{{ $fee->fees->description }}</td>
                            <td>{{ '₱' .number_format($fee->fees->amount, 2, '.', ',') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">
                                <p>No fees</p>
                            </td>
                        </tr>
                         @endforelse
                        <tr>
                            <th class="table-primary" colspan="2">Computer Fees</th>
                        </tr>
                        @forelse ($studentfees->where('type', '0') as $fee)
                        <tr>
                            <td>{{ $fee->fees->description }}</td>
                            <td>{{ '₱' .number_format($fee->fees->amount, 2, '.', ',') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">
                                <p>No fees</p>
                            </td>
                        </tr>
                         @endforelse
                      </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
