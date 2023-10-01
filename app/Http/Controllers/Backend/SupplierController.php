<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuppliersResource;
use App\Http\Requests\SupplierPostRequest;
use App\Models\Customer;
use App\Models\Fish;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplierController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:supplier-list|supplier-create|supplier-edit|supplier-delete', ['only' => ['index','store']]);
        $this->middleware('permission:supplier-create', ['only' => ['create','store']]);
        $this->middleware('permission:supplier-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:supplier-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $suppliers = Supplier::all();
        $customers = Customer::all();

//        return  SuppliersResource::collection($suppliers);
        return view('backend.supplier.index',[
            'suppliers' => SuppliersResource::collection($suppliers),
            'customers' => $customers,
        ]);
    }

    public function create()
    {
        return view('backend.supplier.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($request->name);
        $photo = $request->hasFile('photo');
        if ($photo) {
            $photo = $request->file('photo');
            $imageName = time() . '_' . uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('/uploads/suppliers/'), $imageName);
            $input['photo'] = "/uploads/suppliers/" . $imageName;
        }
        $supplier = Supplier::create($input);
//        return $supplier;
        $notification = [
            'alert-type' => 'success',
            'message' => 'You are successfully creating a supplier account'
        ];

        $supplier  = Supplier::where('slug',$supplier->slug)->first();
        $fishes  = Fish::all();
        return view('backend.supplier.supplier',compact(['supplier','fishes']));

//        return redirect('/system/suppliers/today-supplier/'.$supplier->slug)->with($notification);
    }

    public function show($slug){
        $suppler  = Supplier::where('slug',$slug)->first();
        return $suppler;
    }

    public function edit($slug){
        $suppler  = Supplier::where('slug',$slug)->first();
        return $suppler;
    }

    public function update($slug){
        $suppler  = Supplier::where('slug',$slug)->first();
        return $suppler;
    }
    public function destroy($slug){
        $suppler  = Supplier::where('slug',$slug)->first();
        return $suppler;
    }

    public function supplier($slug){
        $supplier  = Supplier::where('slug',$slug)->first();
        $fishes  = Fish::all();
        $customers = Customer::all();
        return view('backend.supplier.supplier',compact(['supplier','fishes','customers']));
//        return $suppler;
    }



}
