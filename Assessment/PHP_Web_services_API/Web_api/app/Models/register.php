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

        // dd($logindata);
        // dd($logindata['email']);
        // dd($logindata['Password']);
        // exit;

        $logdata = $register::select('*')->where('email', $logindata['email'])->get();
        
        // dd($logdata);
        // dd($logdata[0]['email']);
        // dd($logdata[0]['password']);
        // exit;

        if( $logdata[0]['email'] === $logindata['email'] && $logdata[0]['password'] === $logindata['Password']){
            $response['code'] = 1;
            $response['data'] = $logdata[0];
            $response['message'] = "successfull";
        }else{
            $response['code'] = 0;
            $response['data'] = 0;
            $response['message'] = "error";
        }
        return $response;

        // echo"<pre>";
        // print_r($response);
        // echo"</pre>";
        // exit;
    }

}

