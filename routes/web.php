<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\profileController;


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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/','login');
Route::view('/register','register');
Route::post("/register",[userController::class,'register']);
Route::post('/login',[userController::class,'login']);
Route::get("/profile",[profileController::class,'index']);
Route::get("/editor",[profileController::class,'edit']);

Route::post("/upload",[profileController::class,'upload']);


?>

