<?php

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
Route::group(['middleware' => ['guest']], function () {
  Route::get('/', \App\Http\Livewire\Frontend\Home::class);
  Route::get('login', \App\Http\Livewire\Frontend\Login::class)->name('login');
  Route::get('register', \App\Http\Livewire\Frontend\Register::class)->name('register');
  Route::get('verify-email', \App\Http\Livewire\Frontend\Verifyemail::class)->name('verify-email');
  Route::get('forgotpassword', \App\Http\Livewire\Frontend\Forgotpassword::class)->name('forgotpassword');
  Route::get('reset-password-sent', \App\Http\Livewire\Frontend\ResetPasswordSent::class);
  Route::get('password/reset/{token}', \App\Http\Livewire\Frontend\Resetpassword::class)->name('password.reset');
  Route::get('/verifyemail/{email}/{token}', [\App\Http\Livewire\Frontend\Resetpassword::class, 'verifiedEmail']);
  // Auth::routes([
  //       'register' => false,
  //       'login' => false,
  //       'verify' => true,
  //       'password.reset' =>false
  // ]);
});
Route::group(['middleware' => ['auth']], function () {
  Route::group(['middleware' => ['UserDashboard']], function () {
    Route::get('dashboard', \App\Http\Livewire\Authboard\Dashboard::class);
  });
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
