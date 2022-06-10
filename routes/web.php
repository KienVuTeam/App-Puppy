<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

/* Route::get('/', function () {
    return view('Clients.Blocks.test_css');
});
Route::get('/test', function(){
    return view('Clients.index');
}); */
Route::prefix('/admin')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('Homepage');
    Route::get('/contact', [HomeController::class, 'contact'])->name('ContactPage');
    Route::get('/services', [HomeController::class, 'service'])->name('ServicesPage');
    Route::get('/about', [HomeController::class, 'about'])->name('AboutPage');
});
