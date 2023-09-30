@extends('backend.layouts.app')

@section('title')
    Employees
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Employees </h6>
        <span class="badge bg-info"><a class="text-white" href="{{ route('employee.create.employee') }}"> New Employee </a></span>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Label</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td> <input type="color" id="color" name="color" value="#ff0000" class="form-control"></td>
                        <td>Dave</td>
                        <td>djd@gmail.com</td>
                        <td>active</td>
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
