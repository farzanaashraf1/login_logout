<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
          //logout
Route::get('/logout', function () {
     if(session()->has('ali')){

        session()->pull('ali',null);
     }
    return redirect('login');
});
            //login
Route::get('/login', function () {
    if(session()->has('ali')){

        return redirect('profile');
    }
    return view('login');
});


//Route::view("login","login");
Route::view("access","access");
Route::view("profile","profile")->middleware('protected');
Route::post('user',[AuthController::class,'UserLogin']);