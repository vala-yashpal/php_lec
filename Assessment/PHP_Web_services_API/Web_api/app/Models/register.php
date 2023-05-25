<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class register extends Model
{
    use HasFactory;

    public function registeruser($registertdata,$register){

        // dd($registertdata);
        // $productTable= new \stdClass();

        foreach ($registertdata as $key => $value){
            $register->$key = $value;
        }
        //    dd($register);
        //    dd("called");
        
        return $register->save();
    }

    public function login_user($logindata,$register){

        //dd($logindata);
        
        // dd($logindata['email']);
        $logdata = $register::select('*')->where('email', $logindata['email'])->get();

        dd($logdata['password']);

        // echo "vala";
        // exit;   
        // dd($logdata);



        exit;

        // if($logdata['email'] == $logindata['email']  && $logdata['password'] == $logindata['Password']){
        //     $response['code'] = 1;
        //     $response['data'] = $logdata;
        //     $response['message'] = "successfull";
        // }else{
        //     $response['code'] = 0;
        //     $response['data'] = 0;
        //     $response['message'] = "error";
        // }
        // return $response;

        // dd($logindata);
        // echo"<pre>";
        // print_r($logndata);
        // echo"</pre>";
        // exit;

        // return $logndata;
    }

}

