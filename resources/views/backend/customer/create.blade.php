@extends('backend.layouts.app')

@section('title')
    Customer Create
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Add New Customer</h5>
                        </div>
                        <div class="card-title d-flex align-items-center">
                            <a class="badge bg-info" href="{{ route('customer.lists') }}"> Customers </a>
                        </div>
                    </div>


                    <hr>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Company Name</label>
                            <input type="email" class="form-control" id="inputFirstName">
                        </div>

                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label"> Company Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Company Office No</label>
                            <input type="number" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Company Mobile No</label>
                            <input type="number" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row pb-2">
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">Product*</label>
                                        <select id="inputState" class="form-select">
                                            <option selected="">Admin</option>
                                            <option selected="">Admin</option>
                                            <option selected="">Admin</option>
                                            <option selected="">Admin</option>
                                            <option selected="">Admin</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label for="inputEmail" class="form-label"> QTY</label>
                                        <input type="email" class="form-control" id="inputEmail" value="1">
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputEmail" class="form-label"> Serial No</label>
                                        <input type="email" class="form-control" id="inputEmail" value="FG-5140B">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">Start Date:</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="form-label">End Date:</label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-12 pt-2">
                                        <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary px-5"> <i class="bx bx-plus text-white"> </i> Add Row</button>

                            </div>
                        </div>

                        <div class="col-12 mx-auto">
                            <button type="submit" class="btn btn-success px-5">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
