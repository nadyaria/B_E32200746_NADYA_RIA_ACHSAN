<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nadya;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\DashboardController;



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


/*Route::get('/hello', function() {
   // return 'Hello World';
});

Route::get('/belajar', function() {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('page/{nomor}', function($nomor){
    return 'ini Halaman ke-' . $nomor;
});

Route::get('/image', function () {
    return view('gambar');
});
Route::get('user', [nadya::class, 'index']);
Route::resource('user', nadya::class);

Route::get("/Ria", function () {
    return view("Ria");
});*/

Route::group(['namespace' => 'frontend'] ,function ()
 {
    Route::get('home', [HomeController::class, 'index']);
});

Route::group(['namespace' => 'backend'] ,function ()
 {
    Route::get('dashboard', [DashboardController::class, 'index']);
});