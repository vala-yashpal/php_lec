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
        // $this->middleware('auth');
    }

    public function index(productTable $productTable)
    {

        // $productdata = $productTable->get();
        // return view('alluser',compact('productdata'));
        return view('adminedashbord');
    }

    public function products(Request $request,productTable $productTable)
    {
        $productdata = $productTable->get();
        return view('allproducts',compact('productdata'));
    }
    
    public function productdataapi(Request $request,productTable $productTable)
    {
        $productdata = $productTable->get();
        // dd($productdata);

        return $productdata;
    }

    public function getproductbyidapi($id,Request $request,productTable $productTable)
    {
        $productdataById = $productTable::find($id);
        // dd($productdataById);
        return $productdataById;
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
    public function store(Request $request,productTable $productTable)
    {
        // dd($request->all());
        // $destinationPath = 'images';
        // $myimage = $request->product_image->getClientOriginalName();
        // $request->product_image->move(public_path($destinationPath), $myimage);
    
        $saveproductdata =array("product_title"=> $request->product_title,"product_price"=> $request->product_price,"product_description" =>$request->product_description,"product_qunatity" =>$request->product_qunatity,"created_at" => date("Y-m-d H:i:s"),"product_image" => "myimage.jpg"); 
        // dd($saveproductdata);
        $productsave = $productTable->productsave($saveproductdata,$productTable);

            return $productsave;
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
    public function update( $id,Request $request,productTable $productTable )
    {
        dd("callrd");
        $productfind = $productTable::find($id);

        // if($request->product_image){      
        //     $destinationPath = 'images';
        //     $myimage = $request->product_image->getClientOriginalName();
        //     $request->product_image->move(public_path($destinationPath), $myimage);
        // }else{
        //     $myimage = $request->product_image_old;
        // }
        
        $updateprodata =array("product_title"=>$request->product_title,"product_price"=>$request->product_price,"product_description"=>$request->product_description,"product_qunatity"=>$request->product_qunatity,"product_image" => "myimage.jpg");

        // dd($updateprodata);

        foreach ($updateprodata as $key => $value){
            //  echo "$key => $value";
            $productfind->$key = $value;
        }
        $updateproduct = $productfind->save();

        echo $updateproduct;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
