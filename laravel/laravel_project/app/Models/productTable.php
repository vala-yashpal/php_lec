<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productTable extends Model
{
    use HasFactory;

    public function productsave($saveproductdata,$productTable){

        // dd($saveproductdata);
        // $productTable= new \stdClass();

        foreach ($saveproductdata as $key => $value){
            $productTable->$key = $value;
        }
        //    dd($productTable);
        //    dd("called");
        return $productTable->save();
    }

}
