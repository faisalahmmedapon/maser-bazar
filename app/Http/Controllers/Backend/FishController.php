<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\FishPostRequest;
use App\Http\Resources\FishResource;
use App\Models\Fish;
use Illuminate\Http\Request;
use Str;

class FishController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:fish-list|fish-create|fish-edit|fish-delete', ['only' => ['index','store']]);
        $this->middleware('permission:fish-create', ['only' => ['create','store']]);
        $this->middleware('permission:fish-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:fish-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $fishes = Fish::all();
        return view('backend.fish.index',[
            'fishes' => FishResource::collection($fishes),
        ]);
    }

    public function create()
    {
        return view('backend.fish.create');
    }
    public function store(FishPostRequest $request)
    {
        $request->validated();

        Fish::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'weight' => $request->weight,
            'rate' => $request->rate,
            'amount' => $request->amount,
            'details' => $request->details,
        ]);
        $notification  = [
          'alert-type' => 'success',
          'message' =>   'Successfully create new fish .',
        ];
        return redirect()->route('fish.lists')->with($notification);
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
