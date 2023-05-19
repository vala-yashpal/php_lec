<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
  

        $destinationPath = 'images';
        $myimage = $request->product_image->getClientOriginalName();
        $request->product_image->move(public_path($destinationPath), $myimage);

        //   dd($request);
        //   dd($request->all());

        \DB::table('products')->insert([
            'product_title' =>$request->product_title,
            'product_price' => $request->product_price,
            'product_description' => $request->product_description,
            'product_qunatity' => $request->product_qunatity,
            'created_at' => date("Y-m-d H:i:s"),
            'product_image' =>$request->product_image, 
        ]); 
   
    
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
