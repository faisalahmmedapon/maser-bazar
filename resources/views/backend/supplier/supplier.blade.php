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
{{--                                @for($x=0; $x <= 10; $x++)--}}
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
{{--                                @endfor--}}
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="update-supplier-sell-fishes" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Update Supplier Sell Fishes Details </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="update_supplier_sell_fishes_form" id="update_supplier_sell_fishes_form" method="POST">

                        <div class="modal-body">
                            <input type="hidden" class="form-control" id="update_supplier_sell_fishes_row_id" name="update_supplier_sell_fishes_row_id">

                            <div class="mb-3" data-select2-id="15">
                                <label class="form-label">Select2 Text Control</label>
                                <select id="set_customer_data_in_loop" class="single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">

                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="update_supplier_sell_fishes_customer_name" class="form-label">Customer
                                    Name</label>
                                <input value="" type="text" class="form-control"
                                       id="update_supplier_sell_fishes_customer_name"
                                       name="update_supplier_sell_fishes_customer_name">
                            </div>

                            <div class="col-md-12">
                                <label for="update_supplier_sell_fishes_fish_rate" class="form-label">Fish Rate</label>
                                <input value="" type="text" class="form-control"
                                       id="update_supplier_sell_fishes_fish_rate"
                                       name="update_supplier_sell_fishes_fish_rate">
                            </div>

                            <div class="col-md-12">
                                <label for="update_supplier_sell_fishes_fish_weight" class="form-label">Fish
                                    Weight</label>
                                <input value="" type="text" class="form-control"
                                       id="update_supplier_sell_fishes_fish_weight"
                                       name="update_supplier_sell_fishes_fish_weight">
                            </div>

                            <div class="col-md-12">
                                <label for="update_supplier_sell_fishes_fish_amount" class="form-label">Fish
                                    Amount</label>
                                <input readonly disabled value="" type="text" class="form-control"
                                       id="update_supplier_sell_fishes_fish_amount"
                                       name="update_supplier_sell_fishes_fish_amount">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

@endsection


@section('script')

    <script type="text/javascript">

        $('.single-select').select2({ dropdownParent: $('#update_supplier_sell_fishes_form') });


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
                    var id = 1;
                    $.each(response.supplier_sell_fishes, function (key, item) {
                        html += '<tr > ' +
                            ' <td>' + id++ + '</td>' +
                            ' <td>' + item.customer_name.name + '</td>' +
                            ' <td>' + item.fish_name + '</td>' +
                            ' <td><input disabled readonly id="fish_rate" value="' + item.fish_rate + '" name="rate"></td>' +
                            ' <td> <input disabled readonly id="fish_weight" value="' + item.fish_weight + '" name="weight"> </td>' +
                            ' <td><input disabled readonly id="fish_amount" value="' + item.fish_amount + '" name="amount"></td>' +
                            ' <td class="d-flex">' +
                            '<button type="button" class=" update_supplier_sell_fish " value="' + item.id + '" >Edit</button>' +
                            '<button type="button" class=" delete_supplier_sell_fish " value="' + item.id + '" >Delete</button></td>' +
                            '</td>' +
                            ' </tr>'
                    })
                    $('#cart-item-tbody').html(html);


                    var total_fish_weight = document.getElementById('total_fish_weight');
                    var total_fish_amount = document.getElementById('total_fish_amount');

                    total_fish_weight.innerHTML = response.total_fish_weight.toFixed(2);
                    total_fish_amount.innerHTML = response.total_fish_amount.toFixed(2);
                    // add total weight and total amount


                }
            });
        }


        $(".sell-fish").click(function (e) {
            e.preventDefault();

            var id = $(this).attr("data-id");
            //console.log(dataId);
            $.ajax({
                type: 'POST',
                url: "{{ route('supplier.shellfish') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id,
                    "suppler_id": {{$supplier->id}},
                },
                success: function (response) {
                    getSupplierTodayItems();
                    // console.log(response.supplier_sell_fish);
                    // console.log(response.supplier_sell_fishes);
                    // console.log(response.customers);


                    $("#update-supplier-sell-fishes").modal('show');
                    $('#update_supplier_sell_fishes_row_id').val(response.supplier_sell_fish.id);
                    $('#update_supplier_sell_fishes_customer_name').val(response.supplier_sell_fish.customer_name);
                    $('#update_supplier_sell_fishes_fish_weight').val(response.supplier_sell_fish.fish_weight);
                    $('#update_supplier_sell_fishes_fish_rate').val(response.supplier_sell_fish.fish_rate);
                    $('#update_supplier_sell_fishes_fish_amount').val(response.supplier_sell_fish.fish_amount);


                    var html = '';
                    $.each(response.customers, function (key, customer) {
                        html += '<option value="'+ customer.id +'" >'+ customer.name +'</option>'
                    })
                    $('#set_customer_data_in_loop').html(html);

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
                    // console.log(response.update_supplier_sell_fishes);
                    // getSupplierTodayItems();

                    $("#update-supplier-sell-fishes").modal('show');
                    $('#update_supplier_sell_fishes_row_id').val(response.update_supplier_sell_fishes.id);
                    $('#update_supplier_sell_fishes_customer_name').val(response.update_supplier_sell_fishes.customer_name);
                    $('#update_supplier_sell_fishes_fish_weight').val(response.update_supplier_sell_fishes.fish_weight);
                    $('#update_supplier_sell_fishes_fish_rate').val(response.update_supplier_sell_fishes.fish_rate);
                    $('#update_supplier_sell_fishes_fish_amount').val(response.update_supplier_sell_fishes.fish_amount);
                }
            });
        });


        $(document).on('submit', '#update_supplier_sell_fishes_form', function (e) {
            e.preventDefault();
            var id = $('#update_supplier_sell_fishes_row_id').val();
            let productData = new FormData($('#update_supplier_sell_fishes_form')[0]);
            $.ajax({
                url: "/system/suppliers/update-supplier-sell-fishes-row/" + id,
                type: "POST",
                data: productData,
                processData: false,
                contentType: false,
                success: function (response) {
                    //console.log(response.update_supplier_sell_fishes_row);
                    $("#update-supplier-sell-fishes").modal('hide');
                    getSupplierTodayItems();
                }
            });
        })


        // delete product data
        $(document).on("click", ".delete_supplier_sell_fish", function () {
            var id = $(this).val();
            // console.log(id);
            $.ajax({
                url: "/system/suppliers/delete-supplier-sell-fishes/" + id,
                type: "GET",
                cache: false,
                success: function (response) {
                    //console.log(response.message);
                    getSupplierTodayItems();
                }
            });
        });

    </script>


    <script>
        $(document).click(function() {

                var update_supplier_sell_fishes_fish_rate = parseFloat($("#update_supplier_sell_fishes_fish_rate").val()) || 0;
                var update_supplier_sell_fishes_fish_weight = parseFloat($("#update_supplier_sell_fishes_fish_weight").val()) || 0;
            $('#update_supplier_sell_fishes_fish_amount').val(update_supplier_sell_fishes_fish_rate*update_supplier_sell_fishes_fish_weight);
                // console.log(update_supplier_sell_fishes_fish_rate*update_supplier_sell_fishes_fish_weight)
        });
    </script>

@endsection
