@extends('backend.layouts.app')

@section('title')
    Customers
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Customers Lists</h6>
        <span class="badge bg-info"><a class="text-white" href="{{ route('customer.create.customer') }}"> New Customer </a></span>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Company Name</th>
                            <th>Customer Name</th>
                            <th>Mobile Name</th>
                            <th>Tickets</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Atalst Venture</td>
                        <td>Faisal Ahmmed</td>
                        <td>+8801307788699</td>
                        <td>0</td>
                        <td>
                            <div class="d-flex order-actions">
                                <a href="javascript:;" class=""><i class="lni lni-eye"></i></a>
                                <a href="javascript:;" class=""><i class="bx bxs-edit"></i></a>
                                <a href="javascript:;" class=""><i class="bx bxs-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection


@push('js')
@endpush
