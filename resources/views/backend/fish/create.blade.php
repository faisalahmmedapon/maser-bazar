@extends('backend.layouts.app')

@section('title')
    Create New Fish
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
                    <form class="row g-3" action="{{route('fish.store')}}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <label for="name" class="form-label">Fish Name</label>
                            <input type="text" class="form-control" id="name"
                                   placeholder="Enter here fish name" name="name" value="{{ old('name') }}">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
                        </div>
                        <div class="col-md-6">
                            <label for="weight" class="form-label">Fish Weight</label>
                            <input readonly value="1" type="text" class="form-control" id="weight"
                                   placeholder="Enter here fish weight" name="weight">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('weight'))?($errors->first('weight')):''}}</div>
                        </div>

                        <div class="col-md-6">
                            <label for="rate" class="form-label">Fish Rate</label>
                            <input type="text" class="form-control" id="rate"
                                   placeholder="324.27 Tk" onchange="checkInputValue()" name="rate" value="{{ old('rate') }}">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('rate'))?($errors->first('rate')):''}}</div>
                        </div>


                        <div class="col-md-6">
                            <label for="inputLastName" class="form-label">Total Amount</label>
                            <input readonly type="text" class="form-control" id="amount" name="amount" value="{{ old('amount') }}">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('amount'))?($errors->first('amount')):''}}</div>
                        </div>

                        <div class="col-12">
                            <label for="details" class="form-label">Fish Details</label>
                            <textarea class="form-control summernote" id="details" placeholder="Describe Fish Details"
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
