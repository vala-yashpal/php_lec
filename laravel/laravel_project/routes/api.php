<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any('/getallproductdata',[App\Http\Controllers\adminControlller::class, 'productdataapi']);

Route::any('/getproductbyid/{id}',[App\Http\Controllers\adminControlller::class, 'getproductbyidapi']);

Route::any('/addproduct',[App\Http\Controllers\adminControlller::class, 'store']);

Route::any('/updatepoduct/{id}',[App\Http\Controllers\ProductTableController::class, 'update']);

