@extends('backend.layouts.app')

@section('title')
    Suppliers
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Suppliers </h6>
        <span class="badge bg-info"><a class="text-white" href="{{ route('supplier.create') }}"> New Supplier </a></span>
    </div>

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Invoice ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Photo</th>
                        <th>View Details</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $key=>$supplier)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$supplier->invoice_id}}</td>
                            <td>{{$supplier->name}}</td>
                            <td>{{$supplier->phone}}</td>
                            <td>{{$supplier->address}}</td>
                            <td>
                                <img width="70px" height="50px" src="{{ $supplier->photo }}" alt="" srcset="">
                            </td>
                            <td>
                                <a href="{{route('supplier.details',$supplier->invoice_id)}}" class="badge bg-success radius-30 px-4">Today Supply</a>
                            </td>
                            <td>{{data_time_to_date($supplier->created_at)}}</td>

                            <td>
                                <div class="d-flex order-actions">
                                    <div class="d-flex order-actions">
                                        <a href="{{route('supplier.show',$supplier->invoice_id)}}" class="ms-3 btn btn-sm"><i class="lni lni-eye"></i></a>
                                        <a href="{{route('supplier.edit',$supplier->invoice_id)}}" class="ms-3 btn btn-sm"><i class="bx bxs-edit"></i></a>
                                        <a href="{{route('supplier.delete',$supplier->invoice_id)}}" class="ms-3 btn btn-sm" onclick="confirm('Are you sure ?')"><i class="bx bxs-trash"></i></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>




        </div>

    </div>
@endsection


@push('js')

@endpush
