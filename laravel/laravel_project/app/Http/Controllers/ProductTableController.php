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
        // $data = array("test"=>"somthing");
        // return view('listallproducts',compact('data'));

        $productdata = $productTable->get();
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
    
        $saveproductdata =array("product_title"=> $request->product_title,"product_price"=> $request->product_price,"product_description" =>$request->product_description,"product_qunatity" =>$request->product_qunatity,"created_at" => date("Y-m-d H:i:s"),"product_image" => $myimage); 
        // dd($saveproductdata);
        $productsave = $productTable->productsave($saveproductdata,$productTable);

        if($productsave){
            return redirect('products')->with('saveproduct-status', 'record added Successfully!');
        }else{
            return redirect('products')->with('saveproduct-status', 'some error while inserting!');
        }

        // $productTable-> product_title =$request->product_title;
        // $productTable->product_price = $request->product_price;
        // $productTable->product_description = $request->product_description;
        // $productTable->product_qunatity = $request->product_qunatity;
        // $productTable->created_at = date("Y-m-d H:i:s");
        // $productTable->product_image = $myimage; 
        // $productTable->save();
        // return redirect('products')->with('saveproduct-status', 'record added Successfully!');
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
    public function edit($id,productTable $productTable)
    {
        // dd("called update ".$id);
        $productById = $productTable::find($id);

        // dd($productById);
        return view('addnewproduct',compact('productById')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id,Request $request, productTable $productTable)
    {
        $productfind = $productTable::find($id);

        if($request->product_image){      
            $destinationPath = 'images';
            $myimage = $request->product_image->getClientOriginalName();
            $request->product_image->move(public_path($destinationPath), $myimage);
        }else{
            $myimage = $request->product_image_old;
        }
        
        $updateprodata =array("product_title"=>$request->product_title,"product_price"=>$request->product_price,"product_description"=>$request->product_description,"product_qunatity"=>$request->product_qunatity,"product_image"=>$myimage);

        // dd($updateprodata);

        // dd($updateprodata);
        foreach ($updateprodata as $key => $value){
            //  echo "$key => $value";
            $productfind->$key = $value;
        }
        
        $productfind->save();
        return redirect('products')->with('update-status', 'record updated!');

        // dd("called update $productfind");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id,productTable $productTable)
    {
        // dd($id);
        $productById = $productTable::find($id); 

        $productById->delete($id);
        
        // return redirect("products");
        return redirect('products')->with('delete-status', 'record Delete Successfully!');

    }
}
