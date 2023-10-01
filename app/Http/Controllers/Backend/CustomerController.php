<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Http\Resources\SuppliersResource;
use App\Models\Customer;
use App\Models\Supplier;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:customer-list|customer-create|customer-edit|customer-delete', ['only' => ['index','store']]);
        $this->middleware('permission:customer-create', ['only' => ['create','store']]);
        $this->middleware('permission:customer-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:customer-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $customers = Customer::all();
        return view('backend.customer.index',[
            'customers' => CustomerResource::collection($customers),
        ]);
    }

    public function create()
    {
        return view('backend.customer.create');
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
