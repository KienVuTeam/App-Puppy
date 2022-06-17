<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryDog;

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
/* Route in HomeController */
Route::get('/', [HomeController::class, 'index']);
Route::get('/ck4', [HomeController::class, 'ck4']);

/* Route in CategoryDog */
Route::get('/all-category-dog',[CategoryDog::class, 'all_category_dog'])->name('all_category_dog');
Route::get('/add-category-dog',[CategoryDog::class, 'add_category_dog'])->name('add_category_dog');
/* active & non active */
Route::get('/active-category-dog/{cate_id}',[CategoryDog::class, 'active_category_dog'])->name('active_category_dog');
Route::get('/unactive-category-dog/{cate_id}',[CategoryDog::class, 'unactive_category_dog'])->name('unactive_category_dog');
/* end! */
Route::post('/add-category-dog',[CategoryDog::class, 'post_category_dog'])->name('post_category_dog');