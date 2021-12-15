<?php

use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::get('/', [PagesController::class, 'index'])->name('home');



Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'loginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', 'verified'])->get('/admin/dashboard', function () {
    return view('admin.index');
})->name('admin.dashboard');
Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('admin/profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
Route::get('admin/profile/edit', [AdminProfileController::class, 'updateProfile'])->name('admin.profile.edit');
Route::post('admin/profile/edit', [AdminProfileController::class, 'store'])->name('admin.profile.store');


Route::middleware(['auth:sanctum,web', 'verified'])->get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard',compact('user'));
})->name('dashboard');
Route::get('/user/logout', [PagesController::class, 'userLogout'])->name('user.logout');
Route::get('/user/profile', [PagesController::class, 'userProfile'])->name('user.profile');
Route::post('/user/profile', [PagesController::class, 'updateProfile'])->name('user.profile.store');
Route::get('/user/password/change', [PagesController::class, 'passwordChange'])->name('change.password');
Route::post('/user/password/change', [PagesController::class, 'updatePassword'])->name('user.password.update');
