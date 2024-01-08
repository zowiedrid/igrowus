<?php

use App\Http\Controllers\AdminController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SesiController;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/', [SesiController::class, 'index'])->name('login');
    Route::post('/', [SesiController::class, 'login']);
    
});

// Route::get('/', [SesiController::class, 'index']);
// Route::post('/', [SesiController::class, 'login']);
Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/pembeli/home', [AdminController::class, 'pembeli'])->middleware('userAkses:pembeli');
    Route::get('/penjual/home', [AdminController::class, 'penjual'])->middleware('userAkses:penjual');
    Route::get('/admin/admin', [AdminController::class, 'admin'])->middleware('userAkses:admin');
    Route::get('/logout', [SesiController::class, 'logout']);
});

Route::get('/homepage', function(){
    return view('homepage');
});

Route::get('/loginpenjual', function(){
    return view('penjual\loginpenjual');
});

Route::get('/loginpembeli', function(){
    return view('loginpembeli');
});

Route::get('/dashboardpembeli', function(){
    return view('pembeli\dashboardpembeli');
});

Route::get('/register', [SesiController::class, 'register']);
Route::post('/create', [SesiController::class, 'create']);

