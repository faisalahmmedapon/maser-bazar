@extends('backend.layouts.app')

@section('title')
    {{$supplier->name}}
@endsection
@section('style')
    <style>
        #search-fish {
            width: auto;
            overflow-y: scroll;
            position: relative;
            height: 750px;
            overflow-x: hidden;
            max-height: 750px;
        }

    </style>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 ">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">{{$supplier->name}}</h5>
                            </div>
                            <p class="card-text">{{$supplier->phone}}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Customer</th>
                                    <th>Fish</th>
                                    <th>Rate</th>
                                    <th>Weight</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="row pb-2">
                        <div class="col">
                            <label class="form-label">Select Customer</label>
                            <select class="single-select select2-hidden-accessible" tabindex="-1"
                                    aria-hidden="true">
                                @foreach($customers as $customer)
                                    <option value="{{$customer->name}}"
                                            data-select2-id="{{$customer->id}}">{{$customer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="exampleDataList" class="form-label">Select Fish</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                   placeholder="Type to search...">
                        </div>
                    </div>
                    <div id="search-fish">
                        <div class="row">
                            @foreach($fishes as $fish)

                                <div class="col-md-4">
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">Name: {{$fish->name}}
                                                <span class="badge bg-success">
                                                            <a href="" data-id="{{$fish->id}}"
                                                               class="text-white sell-fish"> <i
                                                                    class="bx bx-cart"></i> </a>
                                                        </span>
                                            </li>
                                            <li class="list-group-item">Rate: {{$fish->rate}} Tk (KG)</li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')

    <script type="text/javascript">

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".sell-fish").click(function (e) {
            e.preventDefault();

            var id = $(this).attr("data-id");
            //console.log(dataId);

            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.shellfish') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                success: function (data) {
                    console.log(data.supplier_sell_fish);
                    getData(data);
                    // $.each(data.supplier_sell_fish, function(index, value){
                    //     $('tbody').append(`<tr>
                    //                 <th>1</th>
                    //                 <td>Artamim</td>
                    //                 <td><input value="270.00" name="rate"></td>
                    //                 <td><input value="1.00" name="weight"></td>
                    //                 <td><input value="1.00" name="amount"></td>
                    //                 <td>
                    //                     <a class="btn btn-success btn-sm">Update</a>
                    //                 </td>
                    //             </tr>`);
                    // });

                }
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            getSupplierTodayItems();

            function getSupplierTodayItems() {

                $.ajax({
                    type: "GET",
                    url: "{{ route('supplier.supplier_sell_fishes', $supplier->id) }}",
                    dataType: 'json',
                    success: function (response) {
                        // console.log(response.supplier_sell_fishes)
                        var html = '';
                        $.each(response.supplier_sell_fishes, function (key, item) {
                            html += '<tr > ' +
                                        ' <td>' + item.id + ' </td>' +
                                        ' <td>' + item.customer_name.name + '</td>' +
                                        ' <td>' + item.fish_name + '</td>' +
                                        ' <td><input id="fish_rate" value="' + item.fish_rate + '" name="rate"></td>' +
                                        ' <td> <input id="fish_weight" value="' + item.fish_weight + '" name="weight"> </td>' +
                                        ' <td><input id="fish_amount" value="' + item.fish_amount + '" name="amount"></td>' +
                                        ' <td class="d-flex">' +
                                            '<a href="" class="" "><i class="bx bxs-trash"></i></a> ' +
                                        '</td>' +
                                    ' </tr>'
                        })
                        $('tbody').html(html);
                    }
                });
            }
        });
    </script>

@endsection
