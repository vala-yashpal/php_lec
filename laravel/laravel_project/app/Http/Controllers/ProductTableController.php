<?php

namespace App\Http\Controllers;

use App\Models\productTable;
use Illuminate\Http\Request;

class ProductTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(productTable $productTable)
    {
        $productdata = $productTable->get();

        // dd($productdata);
        return view('listallproducts',compact('productdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,productTable $productTable)
    {
        $destinationPath = 'images';
        $myimage = $request->product_image->getClientOriginalName();
        $request->product_image->move(public_path($destinationPath), $myimage);
            $productTable-> product_title =$request->product_title;
            $productTable->product_price = $request->product_price;
            $productTable->product_description = $request->product_description;
            $productTable->product_qunatity= $request->product_qunatity;
            $productTable->created_at = date("Y-m-d H:i:s");
            $productTable->product_image = $request->product_image; 
            $productTable->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(productTable $productTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productTable $productTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productTable $productTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,productTable $productTable)
    {
        dd($id);
    }
}
