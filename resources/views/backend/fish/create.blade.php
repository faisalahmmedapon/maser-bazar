@extends('backend.layouts.app')

@section('title')
    Fish Create
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bx-cart me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Add New Fish</h5>
                        </div>
                        <div class="card-title d-flex align-items-center">
                            <a class="badge bg-info" href="{{ route('fish.lists') }}"> Fishes </a>
                        </div>
                    </div>


                    <hr>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputFirstName" class="form-label">Fish Name</label>
                            <input type="email" class="form-control" id="inputFirstName">
                        </div>
                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label">Fish Weight</label>
                            <input type="password" class="form-control" id="inputLastName">
                        </div>

                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label">Fish Rate</label>
                            <input type="password" class="form-control" id="inputLastName">
                        </div>


                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label">Total Amount</label>
                            <input type="password" class="form-control" id="inputLastName">
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Fish Details</label>
                            <textarea class="form-control" id="inputAddress" placeholder="Describe About"
                                      rows="3"></textarea>
                        </div>

                        <div class="col-12 pt-3">
                            <button type="submit" class="btn btn-primary px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
