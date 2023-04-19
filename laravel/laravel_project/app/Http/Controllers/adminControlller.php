<?php

namespace App\Http\Controllers;
use App\Models\productTable;
use Illuminate\Http\Request;

class adminControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(productTable $productTable)
    {
        $productdata = $productTable->get();
        return view('alluser',compact('productdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('start');
    }

    /**
     * Store a newly created resource in storage.
     */
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
