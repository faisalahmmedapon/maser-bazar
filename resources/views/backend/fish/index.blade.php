@extends('backend.layouts.app')

@section('title')
    Fishes
@endsection



@push('css')
@endpush

@section('content')
    <div class="d-flex justify-content-between">
        <h6 class="mb-0 text-uppercase"> Fishes </h6>
        <span class="badge bg-info"><a class="text-white" href="{{ route('fish.create') }}"> New Fish </a></span>
    </div>

    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fish Name</th>
                        <th>Fish Rate</th>
                        <th>Fish Weight(KG)</th>
                        <th>Fish Amount(TK)</th>
                        <th>Created</th>
                        <th>View Details</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($fishes as $key=>$fish)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$fish->name}}</td>
                            <td>{{$fish->rate}}</td>
                            <td>{{$fish->weight}}</td>
                            <td>{{$fish->amount}}</td>
                            <td>{{data_time_to_date($fish->created_at)}}</td>
                            <td>
                                <a href="{{route('fish.show',$fish->slug)}}" class="badge bg-success radius-30 px-4">View Details</a>
                            </td>

                            <td>
                                <div class="d-flex order-actions">
                                    <div class="d-flex order-actions">
{{--                                        <a href="{{route('fish.show.fish')}}" class="ms-3"><i class="lni lni-eye"></i></a>--}}
                                        <a href="{{route('fish.edit',$fish->slug)}}" class="ms-3 btn btn-sm"><i class="bx bxs-edit"></i></a>
                                        <a href="{{route('fish.delete',$fish->slug)}}" class="ms-3 btn btn-sm"><i class="bx bxs-trash"></i></a>
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
