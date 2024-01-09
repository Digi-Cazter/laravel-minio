<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::get('/',function(){
    return Storage::disk('s3')->allFiles('');
});

Route::get('/save',function(){
    return Storage::disk('s3')->put('./test.svg', file_get_contents('test.svg'));
});

//Route::get('/', function () {
//    return view('welcome');
//});
