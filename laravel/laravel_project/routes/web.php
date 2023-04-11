<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/products','listallproducts');
Route::get('/products',[App\Http\Controllers\ProductTableController::class, 'index']);

Route::get('/delete/{id}',[App\Http\Controllers\ProductTableController::class, 'destroy']);

Route::view('/addproduct','addnewproduct');

// Route::post('/saveproduct',[App\Http\Controllers\productcontroller::class, 'index']);

Route::post('/saveproduct',[App\Http\Controllers\ProductTableController::class, 'store']);



    // Route::get('/uri',[Controller::class,'method']);         //get data from serve and show in blade page
    // Route::post('/uri',[Controller::class,'method']);        //send HTML data to the serve
    // Route::patch('/uri{id}',[Controller::class,'method']);   //get data with id (select for update)
    // Route::put('/uri{id}',[Controller::clss,'method']);      //submit data with id (for update)
    // Route::delete('/uri{id}',[Controller::class,'method']);  //delete data with id (for delete) 
    // Route::any('/uri?{id}',[Controller::class,'method']);         //all method execpt view resource
    // Route::view('/uri',"viewname");                          //direct view page load
    // Route::resource('/uri',Controller::class);               // all routes maintain by views

require __DIR__.'/auth.php';
