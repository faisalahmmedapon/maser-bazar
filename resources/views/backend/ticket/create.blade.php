@extends('backend.layouts.app')

@section('title')
    Open New Tickets
@endsection

@section('content')

    <div class="row">
        <div class="col-12 col-sm-6 col-md-12 mx-auto">
            <div class="card border-top border-0 border-4 border-primary">
                <div class="card-body p-5">
                    <div class="d-flex justify-content-between">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="lni lni-ticket-alt me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">Open New Tickets</h5>
                        </div>
                        <div class="card-title d-flex align-items-center">
                            <a class="badge bg-info" href="{{ route('ticket.history.lists') }}"> Tickets </a>
                        </div>
                    </div>


                    <hr>
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Company Name</label>
                            <select class="single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option selected="">A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Product Category</label>
                            <select class="single-select select2-hidden-accessible" data-select2-id="2" tabindex="-2" aria-hidden="true">
                                <option selected="">A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Product Code</label>
                            <select class="single-select select2-hidden-accessible" data-select2-id="3" tabindex="-3" aria-hidden="true">
                                <option selected="">A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="inputState" class="form-label">Serial Number</label>
                            <select class="single-select select2-hidden-accessible" data-select2-id="4" tabindex="-4" aria-hidden="true">
                                <option selected="">A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Message</label>
                            <textarea class="form-control summernote" id="summernote" placeholder="Message..." rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-10">
                                    <label for="formFile" class="form-label">Attachment</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="col-md-10">
                                    <label for="formFile" class="form-label">Attachment</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-default px-5"> <i class="bx bx-plus text-black"> </i>  Add More</button>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-success px-5">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
