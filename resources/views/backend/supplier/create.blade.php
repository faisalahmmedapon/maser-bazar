@extends('backend.layouts.app')

@section('title')
    New Supplier
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between">
                        <div class="card-title d-flex align-items-center">
                            <h5 class="mb-0 text-primary">Add New Supplier</h5>
                        </div>
                        <div class="card-title d-flex align-items-center">
                            <a class="badge bg-info" href="{{ route('supplier.lists') }}"> Suppliers </a>
                        </div>
                    </div>

                    <hr>
                    <form class="row g-3" action="{{route('supplier.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name"
                                   placeholder="Enter here supplier name" name="name" value="{{ old('name') }}">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input value="{{ old('email') }}" type="email" class="form-control" id="email"
                                   placeholder="Enter here supplier email" name="email">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input  value="{{ old('phone') }}" type="text" class="form-control" id="phone"
                                   placeholder="Enter here supplier phone" name="phone">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('phone'))?($errors->first('phone')):''}}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input value="{{ old('address') }}" type="text" class="form-control" id="address"
                                   placeholder="Enter here supplier address" name="address">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('photo'))?($errors->first('photo')):''}}</div>
                        </div>

                        <div class="col-12">
                            <label for="details" class="form-label">Details</label>
                            <textarea class="form-control summernote" id="details" placeholder="supplier details"
                                      rows="3" name="details">{{ old('details') }}</textarea>
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

@section('script')

<script>

    function offer() {
        var rate = $('#rate').val();
        // var amount = $('#amount').val();

        if (!isNaN(rate)) {
            $('#amount').val(rate);
        }else {
            alert("Please provide a fish price like 320");
            $('#amount').val("");
            $('#rate').val("");
        }
    }

    $('#rate, #amount').on('keyup change', function () {
        offer();
    });

</script>
@endsection
