<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/register', [AuthController::class, 'create'])->name('register');

Route::get('/members', [MemberController::class, 'index'])->name('members.index');
// Route::get('/home',function () {
//     return view('landing');
// });

// Dashboard routes 
Route::get('dashboard',[Dashboard::class, 'index'])->name('dashboard');


// assets management routes 
Route::get('asset/management', function(){
    return view('admin.assetsManagement.assetManagement');
});

Route::get('asset/maintance', function(){
    return view('admin.assetsManagement.maintance');
});

Route::get('analysis', function(){
    return view('admin.analysis-and-report.analysis');
});