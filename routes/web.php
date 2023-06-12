<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\TestController;

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

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/custom', function(){
    $mensaje = "Mensaje desde el servidor!";
    return view('custom',['msg' => $mensaje, "edad" => 15]);
});

Route::get('/test',[App\Http\Controllers\TestController::class,'test']);