<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productTable extends Model
{
    use HasFactory;
    public function productsave($saveproductdata){

        // dd($saveproductdata);

        foreach ($saveproductdata as $key => $value){
            // echo "$key => $value";

           $productTable->$key = $value;
       }
       dd($productTable);
    //$productTable->save();

       return redirect('products')->with('saveproduct-status', 'record added Successfully!');
    }

}
