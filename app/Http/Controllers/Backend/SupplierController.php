<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\SuppliersResource;
use App\Http\Requests\SupplierPostRequest;
use App\Models\Customer;
use App\Models\Fish;
use App\Models\Supplier;
use App\Models\SupplierSellFish;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SupplierController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:supplier-list|supplier-create|supplier-edit|supplier-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:supplier-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:supplier-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:supplier-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $suppliers = Supplier::all();

//        return  SuppliersResource::collection($suppliers);
        return view('backend.supplier.index', [
            'suppliers' => SuppliersResource::collection($suppliers),
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

        $supplier = Supplier::where('slug', $supplier->slug)->first();
        $fishes = Fish::all();
        return view('backend.supplier.supplier', compact(['supplier', 'fishes']));

//        return redirect('/system/suppliers/today-supplier/'.$supplier->slug)->with($notification);
    }

    public function show($slug)
    {
        $suppler = Supplier::where('slug', $slug)->first();
        return $suppler;
    }

    public function edit($slug)
    {
        $suppler = Supplier::where('slug', $slug)->first();
        return $suppler;
    }

    public function update($slug)
    {
        $suppler = Supplier::where('slug', $slug)->first();
        return $suppler;
    }

    public function destroy($slug)
    {
        $suppler = Supplier::where('slug', $slug)->first();
        return $suppler;
    }

    public function supplier($slug)
    {
        $data['supplier'] = Supplier::where('slug', $slug)->first();
        $data['fishes'] = Fish::all();
        $data['customers'] = Customer::all();

        return view('backend.supplier.supplier', $data);
    }

    public function shellfish(Request $request)
    {

//        $data = $request->id;
        $shellfish = Fish::findOrFail($request->id);

        $supplier_sell_fish = new SupplierSellFish();
        $supplier_sell_fish->supplier_name = $request->suppler_id;
        $supplier_sell_fish->customer_name = 2;
        $supplier_sell_fish->fish_name = $shellfish->name;
        $supplier_sell_fish->fish_rate = $shellfish->rate;
        $supplier_sell_fish->fish_weight = $shellfish->weight;
        $supplier_sell_fish->fish_amount = $shellfish->rate*$shellfish->weight;
        $supplier_sell_fish->save();


        $supplier_sell_fishes = SupplierSellFish::all();
        $customers = Customer::all();
        return response()->json([
            'supplier_sell_fish' => $supplier_sell_fish,
            'supplier_sell_fishes' => $supplier_sell_fishes,
            'customers' => $customers,

        ]);

    }

    public function supplier_sell_fishes($id)
    {

        $supplier_sell_fishes = SupplierSellFish::with('customer_name')->where('supplier_name',$id)->get();
        $total_fish_weight = $supplier_sell_fishes->sum('fish_weight');
            $total_fish_amount = $supplier_sell_fishes->sum('fish_amount');
        return response()->json([
            'supplier_sell_fishes' => $supplier_sell_fishes,
            'total_fish_weight' => $total_fish_weight,
            'total_fish_amount' => $total_fish_amount,
        ]);

    }
    public function update_supplier_sell_fishes($id)
    {
        $supplier_sell_fishes = SupplierSellFish::findOrFail($id);
        $customers = Customer::all();
        return response()->json([
            'message' => 'You are tring to edit supplier sell fishes',
            'update_supplier_sell_fishes' => $supplier_sell_fishes,
            'customers' => $customers,
        ]);
    }

    public function update_supplier_sell_fishes_row(Request $request,$id)
    {
        $update_supplier_sell_fishes_row = SupplierSellFish::findOrFail($id);
        $update_supplier_sell_fishes_row->customer_name = $request->update_supplier_sell_fishes_customer_name;
        $update_supplier_sell_fishes_row->fish_rate = $request->update_supplier_sell_fishes_fish_rate;
        $update_supplier_sell_fishes_row->fish_weight = $request->update_supplier_sell_fishes_fish_weight;
        $update_supplier_sell_fishes_row->fish_amount = $request->update_supplier_sell_fishes_fish_rate*$request->update_supplier_sell_fishes_fish_weight;
        $update_supplier_sell_fishes_row->save();
        return response()->json([
            'message' => 'successfully upate this item from our data base',
            'update_supplier_sell_fishes_row' => $update_supplier_sell_fishes_row,
        ]);
    }

    public function delete_supplier_sell_fishes($id)
    {
        $supplier_sell_fishes = SupplierSellFish::findOrFail($id);
        if ($supplier_sell_fishes){
            $supplier_sell_fishes->delete();
        }
        return response()->json([
            'message' => 'successfully delete this item from our data base',
        ]);
    }

    public function supplier_sell_fish_price_calculate(Request $request)
    {
        $amount = $request->update_supplier_sell_fishes_fish_rate*$request->update_supplier_sell_fishes_fish_weight;

        return response()->json([
            'total' => $amount,
        ]);
    }


    public function fish_search(Request $request)
    {
        $query = $request->get('query');
        $query_data = Fish::where('name', 'LIKE', $query . '%')->get();
        return response()->json([
            'fish_search' => $query_data,
        ]);
    }




    public function manage(){
        $suppliers = Supplier::all();
        $customers = Customer::all();

//        return  SuppliersResource::collection($suppliers);
        return view('backend.supplier.manage', [
            'suppliers' => SuppliersResource::collection($suppliers),
            'customers' => $customers,
        ]);
    }

    public function print($id)
    {


        $data['invoice'] = Supplier::findOrFail($id);
        $data['supplier_sell_fishes'] = SupplierSellFish::with('customer_name')->where('supplier_name',$id)->get();
        $data['total_fish_weight'] = number_format((float)$data['supplier_sell_fishes']->sum('fish_weight'), 2, '.', '');
        $data['total_fish_amount'] = number_format((float)$data['supplier_sell_fishes']->sum('fish_amount'), 2, '.', '');
        return view('backend.supplier.print',$data);
    }



}
