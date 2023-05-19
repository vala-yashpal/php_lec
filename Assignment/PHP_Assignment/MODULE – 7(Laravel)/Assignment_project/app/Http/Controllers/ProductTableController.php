<?php

namespace App\Http\Controllers;

use App\Models\productTable;
use App\Traits\ImageTrait;
use Illuminate\Http\Request;
use App\Mail\MyTestMail;
use PDF;
use Mail;

class ProductTableController extends Controller
{
    use ImageTrait;
    
    public function testTrait(Request $request,productTable $productTable)
    {
        $input['image'] = $this->verifyAndUpload($request, 'image', 'images');

        // dd("inside   trait controller ");
        // return $input['image'];
        echo "( api for image upload and with the example of trait image uploade store) ";
    
    }

    public function home(productTable $productTable)
    {
        dd("home");
        return view('home_home');
    }
    public function About(productTable $productTable)
    {
        dd("About"); 
        return view('About_About');
    }
    public function Contact(productTable $productTable)
    {
        dd("Contact");
        return view('Contact_Contact');
    }
    public function Gallery(productTable $productTable)
    {
        dd("Gallery");
        return view('Gallery_Gallery');
    }

    public function sendmail()
    {
        $data["email"] = "valayashpal00@gmail.com";
        $data["title"] = "From testing mail";
        $data["body"] = "This is Demo";
    
        $pdf = PDF::loadView('emails.myTestMail', $data);
        $data["pdf"] = $pdf;
  
        Mail::to($data["email"])->send(new MyTestMail($data));
    
        dd('Mail sent successfully');
    }

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
            // dd($productById->product_image);
            unlink('images/'.$productById->product_image);
            $productById->delete($id);
        
        // return redirect("products");
        return redirect('products')->with('delete-status', 'record Delete Successfully!');

    }
}
