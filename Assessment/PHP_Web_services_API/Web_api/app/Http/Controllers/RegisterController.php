<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request,register $register)
    {
        
        // dd($request);

        $registertdata =array("user_name"=> $request->user_name,"email"=> $request->email,"password" =>$request->Password); 

        // dd($registertdata);

        $regis_user = $register->registeruser($registertdata,$register);

        // dd($regis_user);

        return $regis_user;

    }

    public function log_in(Request $request,register $register)
    {
        

        // $user = $register::select{"email"=> $request->email,"password" =>$request->Password}

        // echo"<pre>";
        // print_r($user);
        // echo"</pre>";
        // exit;

        // dd($request);

        $logindata =array("email"=> $request->email,"Password" =>$request->Password); 

        // dd($logindata);

        $login_user = $register->login_user($logindata,$register);

        dd($regis_user);

        return $login_user;

    }

    /**
     * Display the specified resource.
     */
    public function show(register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(register $register)
    {
        //
    }
}
