@extends('backend.layouts.app')

@section('title')
    Tickets History
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Tickets History </h6>
        <span class="badge bg-info"><a class="text-white" href="{{ route('employee.create.employee') }}"> Tickets History </a></span>
    </div>

    <hr />
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Ticket Number</th>
                            <th>Company Name</th>
                            <th>Ticket Open</th>
                            <th>Worker</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Lats Update</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>#9879027</td>
                        <td>ABD SN BD</td>
                        <td>
                            <span class="badge bg-success">Tan</span>
                        </td>
                        <td>
                            <span class="badge bg-success">Dave</span>
                            <span class="badge bg-info">Boy</span>
                        </td>
                        <td>
                            Pending
                        </td>
                        <td>
                            8/6/2023
                        </td>
                        <td>
                            2 Minutes
                        </td>
                        <td>
                            <div class="col">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Assign</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tan</a></li>
                                        <li><a class="dropdown-item" href="#">Boy</a></li>
                                        <li><a class="dropdown-item" href="#">Jeff</a></li>
                                        <li><a class="dropdown-item" href="#">Dave</a></li>
                                    </ul>
                                </div>
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
