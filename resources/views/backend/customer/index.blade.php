@extends('backend.layouts.app')

@section('title')
    Customers
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Customers </h6>
        <span class="badge bg-info"><a class="text-white" href="{{ route('customer.create') }}"> New Customer </a></span>
    </div>

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Photo</th>
                        <th>View Details</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $key=>$customer)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$customer->name}}</td>
                            <td>{{$customer->phone}}</td>
                            <td>{{$customer->address}}</td>
                            <td>
                                <img width="70px" height="50px" src="{{ $customer->photo }}" alt="" srcset="">
                            </td>
                            <td>
                                <a href="{{route('customer.show',$customer->slug)}}" class="badge bg-success radius-30 px-4">Details</a>
                            </td>
                            <td>
                                <div class="d-flex order-actions">
                                    <div class="d-flex order-actions">
                                        <a href="{{route('customer.show',$customer->slug)}}" class="ms-3 btn btn-sm"><i class="lni lni-eye"></i></a>
                                        <a href="{{route('customer.edit',$customer->slug)}}" class="ms-3 btn btn-sm"><i class="bx bxs-edit"></i></a>
                                        <a href="{{route('customer.delete',$customer->slug)}}" class="ms-3 btn btn-sm" onclick="confirm('Are you sure ?')"><i class="bx bxs-trash"></i></a>
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
