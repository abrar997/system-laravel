<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Front\FronHomeController;
use Illuminate\Support\Facades\Route;

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


// Admin dashboard
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::middleware('adminAuth:web')->group(function () {
        // Route::get('/adminHome', function () {
        //     return view('adminHome');
        // })->name('adminHome');
        Route::get('dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
        Route::post('add-categ', [AdminHomeController::class, 'AddCategory']);
    });
});
// Home
Route::get('/', [FronHomeController::class, 'index'])->name('HomeFront');
