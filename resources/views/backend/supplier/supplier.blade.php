@extends('backend.layouts.app')

@section('title')
    {{$supplier->name}}
@endsection
@section('style')
    <style>
        #search-fish {
            width: 600px;
            overflow-y: scroll;
            position: relative;
            height: 300px;
            overflow-x: hidden;
        }
    </style>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h5 class="card-title">{{$supplier->name}}</h5>
                        </div>
                        <p class="card-text">{{$supplier->phone}}</p>
                    </div>
                </div>
                <!--breadcrumb-->
                <!--end breadcrumb-->
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-0">Today Supplier Items</h4>
                        <hr/>
                        <div class="row gy-3">
                            <div class="col-md-7 col-sm-7">
                                <h4 class="mb-0">Today Supplier Items</h4>
                            </div>
                            <div class="col-md-5 col-sm-5">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Select Customer</label>
                                        <select class="single-select select2-hidden-accessible" tabindex="-1"
                                                aria-hidden="true">
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->name}}"
                                                        data-select2-id="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div id="search-fish">
                                    <div class="row">
                                        <div class="card-body">
                                            <label for="exampleDataList" class="form-label">Select Fish</label>
                                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                                   placeholder="Type to search...">
                                        </div>
                                        @foreach($fishes as $fish)
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">Name: {{$fish->name}}
                                                            <span class="badge bg-success">
                                                            <a class="text-white" href=""> <i
                                                                    class="bx bx-cart"></i> </a>
                                                        </span>
                                                        </li>
                                                        <li class="list-group-item">Rate: {{$fish->rate}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')

@endsection

