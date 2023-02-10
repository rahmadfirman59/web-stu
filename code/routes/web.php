<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Front\IndexController::class, 'index'])->name('front.index');
Route::get('/admin', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');



Route::group(['middleware' => ['checklogin']], function () {
    Route::prefix('admin')->group(function(){
        Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
    
        Route::prefix('slider')->group(function(){
            Route::get('/', [App\Http\Controllers\admin\SliderController::class, 'index'])->name('slider');
            Route::get('datatables', [App\Http\Controllers\admin\SliderController::class, 'datatables'])->name('slider.datatables');
            Route::get('detail/{id}', [App\Http\Controllers\admin\SliderController::class, 'detail']);
            Route::post('store', [App\Http\Controllers\admin\SliderController::class, 'store']);
            Route::post('update', [App\Http\Controllers\admin\SliderController::class, 'update']);
            Route::delete('delete/{id}', [App\Http\Controllers\admin\SliderController::class, 'delete']);
        });

        Route::prefix('portofolio')->group(function(){
            Route::prefix('kategori')->group(function(){
                Route::get('/', [App\Http\Controllers\admin\KategoriController::class, 'index'])->name('admin.portofolio.kategori');
                Route::get('datatables', [App\Http\Controllers\admin\KategoriController::class, 'datatables']);
                Route::get('createSlug', [App\Http\Controllers\admin\KategoriController::class, 'createSlug']);
                Route::get('detail/{id}', [App\Http\Controllers\admin\KategoriController::class, 'detail']);
                Route::post('store', [App\Http\Controllers\admin\KategoriController::class, 'store']);
                Route::post('update', [App\Http\Controllers\admin\KategoriController::class, 'update']);
                Route::delete('delete/{id}', [App\Http\Controllers\admin\KategoriController::class, 'delete']);
            });

        });

    
    
        Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
    });
});