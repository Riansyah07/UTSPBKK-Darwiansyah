<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;




use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
  return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
  Route::get('/register', [RegisterController::class, 'register'])->name('register');
  Route::post('/register', [RegisterController::class, 'registerPost'])->name('register');
  Route::get('/login', [LoginController::class, 'login'])->name('login');
  Route::post('/login', [LoginController::class, 'loginPost'])->name('login');
  });

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [HomeController::class, 'index']);
Route::get('/member', [MemberController::class, 'index']);
//Route::delete('/logout', [LoginController::class, 'logout'])->name('logout');
  

Route::resource('/kelas', DashboardController::class);
Route::resource('/member', MemberController::class);
Route::resource('/barang', BarangController::class);

});

Auth::routes();



