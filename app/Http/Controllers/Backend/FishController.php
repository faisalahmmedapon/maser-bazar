<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Fish;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function index()
    {
        $fishes = Fish::all();
//        return $fishes;

        return view('backend.fish.index',compact('fishes'));
    }

    public function create()
    {
        return view('backend.fish.create');
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
