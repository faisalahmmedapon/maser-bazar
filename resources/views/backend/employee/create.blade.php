@extends('backend.layouts.app')

@section('title')
    Employee Create
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
                            <h5 class="mb-0 text-primary">Employee Registration</h5>
                        </div>
                        <div class="card-title d-flex align-items-center">
                            <a class="badge bg-info" href="{{ route('employee.lists') }}"> Employees </a>
                        </div>
                    </div>


                    <hr>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Color Label</label>
                            <input type="color" id="color" name="color" value="#ff0000" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName">
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName">
                        </div><div class="col-md-6">
                            <label for="inputLastName" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="inputLastName">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword">
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Role*</label>
                            <select id="inputState" class="form-select">
                                <option selected="">Admin</option>
                                <option selected="">Admin</option>
                                <option selected="">Admin</option>
                                <option selected="">Admin</option>
                                <option selected="">Admin</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
