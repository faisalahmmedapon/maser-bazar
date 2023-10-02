@extends('backend.layouts.app')

@section('title')
    {{$supplier->name}}
@endsection
@section('style')
    <style>
        #search-fish {
            overflow-y: scroll;
            position: fixed;
            height: 750px;
            overflow-x: hidden;
            max-height: 750px;
        }

        #cart-item {
            overflow-y: scroll;
            /*position: fixed;*/
            height: 675px;
            overflow-x: hidden;
            max-height: 750px;
        }

    </style>
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-md-7 col-sm-7 col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">{{$supplier->name}}</h5>
                            </div>
                            <p class="card-text">{{$supplier->phone}}</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card" id="cart-item">
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
                                <tbody id="cart-item-tbody">

                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between px-5">
                            <div class="d-flex justify-content-around">
                                <strong>Weight: </strong>
                                <strong> <span id="total_fish_weight"></span> KG</strong>
                            </div>
                            <div class="d-flex justify-content-around">
                                <strong>Amount: </strong>
                                <strong> <span id="total_fish_amount"></span> TK</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-lg-5">
                    <div class="row pb-3">

                        <div class="col">
                            <label for="exampleDataList" class="form-label">Select Fish</label>
                            <input class="form-control" list="datalistOptions" id="exampleDataList"
                                   placeholder="Type to search...">
                        </div>
                    </div>
                    <div id="search-fish">
                        <div class="row">
                            @foreach($fishes as $fish)
                                @for($x=0; $x <= 10; $x++)
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
                                @endfor
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <button id="" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleLargeModal">Large Modal</button>
        <div class="modal fade" id="exampleLargeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6">
                            <label for="weight" class="form-label">Customer Name</label>
                            <input  value="" type="text" class="form-control" id="weight"
                                    placeholder="Enter here fish weight" name="weight">
                        </div>
                        <div class="col-md-6">
                            <label for="weight" class="form-label">Fish Name</label>
                            <input  value="" type="text" class="form-control" id="weight"
                                    placeholder="Enter here fish weight" name="weight">
                        </div>
                        <div class="col-md-6">
                            <label for="weight" class="form-label">Fish Weight</label>
                            <input  value="" type="text" class="form-control" id="weight"
                                   placeholder="Enter here fish weight" name="weight">
                        </div>

                        <div class="col-md-6">
                            <label for="rate" class="form-label">Fish Rate</label>
                            <input type="text" class="form-control" id="rate"
                                   placeholder="324.27 Tk" name="rate" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="amount" class="form-label">Fish Amount</label>
                            <input type="text" class="form-control" id="amount"
                                   placeholder="324.27 Tk" name="rate" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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


        getSupplierTodayItems();

        function getSupplierTodayItems() {

            $.ajax({
                type: "GET",
                url: "{{ route('supplier.supplier_sell_fishes', $supplier->id) }}",
                dataType: 'json',
                success: function (response) {
                    // console.log(response.supplier_sell_fishes);
                    // console.log(response.total_fish_weight);
                    // console.log(response.total_fish_amount);
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
                            '<button type="button" class=" update_supplier_sell_fish " value="' + item.id + '" >Edit</button>' +
                            '<button type="button" class=" delete_supplier_sell_fish " value="' + item.id + '" >Delete</button></td>' +
                            '</td>' +
                            ' </tr>'
                    })
                    $('#cart-item-tbody').html(html);


                 var total_fish_weight =   document.getElementById('total_fish_weight');
                  var total_fish_amount =   document.getElementById('total_fish_amount');

                    total_fish_weight.innerHTML = response.total_fish_weight;
                    total_fish_amount.innerHTML = response.total_fish_amount;
                    // add total weight and total amount



                }
            });
        }


        $(".sell-fish").click(function (e) {
            e.preventDefault();

            var id = $(this).attr("data-id");
            //console.log(dataId);
            $("#exampleLargeModal").modal('show');
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.shellfish') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                },
                success: function (data) {
                    console.log(data.supplier_sell_fish);
                    getSupplierTodayItems();

                }
            });
        });


        $(document).on("click", ".update_supplier_sell_fish", function () {
            var id = $(this).val();
            // console.log(id);
            $.ajax({
                url: "/system/suppliers/update-supplier-sell-fishes/" + id,
                type: "GET",
                cache: false,
                success: function (response) {
                    console.log(response);
                    // getSupplierTodayItems();
                    $("#exampleLargeModal").modal('show');

                }
            });
        });


        // delete product data
        $(document).on("click", ".delete_supplier_sell_fish", function () {
            var id = $(this).val();
            // console.log(id);
            $.ajax({
                url: "/system/suppliers/delete-supplier-sell-fishes/" + id,
                type: "GET",
                cache: false,
                success: function (response) {
                    console.log(response.message);
                    getSupplierTodayItems();
                }
            });
        });

    </script>

@endsection
