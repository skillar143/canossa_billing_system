@extends('layouts.app')

@section('content')

<div class="card shadow mx-auto mt-5 animated--grow-in" style="width: 80%;">
    <div class="card-header py-3 d-flex">
        <h6 class="m-0 font-weight-bold text-primary">Discount</h6>

        <div class="ml-auto">
            <a href="#" class="btn btn-sm btn-outline-primary btn-icon-split" data-toggle="modal" data-target="#AddDiscount">
                <span class="icon">
                    <i class="fas fa-plus text-primary"></i>
                </span>
                <span class="text">Add Discount</span>
            </a>
        </div>

    </div>
    <div class="card-body p-4" >
        <div class="table-responsive">
            <table class="table table-bordered "  sort="asc" width="100%" cellspacing="0">
                <thead class="text-center">
                    <tr>
                        <th class="col-3">Description</th>
                        <th class="col-2">Percentage %</th>
                        <th class="col-2">Action</th>

                    </tr>
                </thead>
                <tbody>
                @foreach($discounts as $discount)
                   <tr>
                     <td class="text-center font-weight-bold">{{ $discount->description }}</td>
                     <td class="text-right font-weight-bold">{{ number_format($discount->amount, 1, '.', ',') }}%</td>
                     <td >

                            <a href="" class="btn btn-sm btn-outline-success btn-icon-split m-1 edit-discount" data-toggle="modal" data-target="#editDiscount"
                            data-id="{{ $discount->id }}"  data-description="{{ $discount->description }}" data-amount="{{ $discount->amount }}">
                                <span class="icon">
                                    <i class="fas fa-pen text-success"></i>
                                    </span>
                                    <span class="text px-3 d-none d-xl-block">Edit</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-outline-danger btn-icon-split m-1 delete-discount" data-toggle="modal" data-target="#deleteDiscount"
                                data-id="{{ $discount->id }}"  data-description="{{ $discount->description }}" data-amount="{{ $discount->amount }}">
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

@section('modals')

@include('modals/discount.addDiscount')
@include('modals/discount.editDiscount')
@include('modals/discount.deleteDiscount')

@endsection
