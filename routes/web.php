<?php

use App\Http\Controllers\routes;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "
web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testPage' , [routes::class , 'testpage_fn']) -> name('testPage') ;
Route::get('/testPage2' , [routes::class , 'testpage_fn_model']) ;
Route::get('/testPage2/{id}' , [routes::class , 'testpage_fn_model']) ;

// viewpage page

Route::get('/viewpage' , [routes::class , 'viewpage']) ;


Route::get('/mina/{id}' , function ($id) {
    return "mina your id is " . ' => ' . $id ;
}) ;
