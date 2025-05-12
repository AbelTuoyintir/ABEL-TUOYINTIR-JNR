<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MemberController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::get('/home',function () {
    return view('landing');
});

Route::get('login',function(){
    return view('admin.authenticate.login');
});

Route::get('dashboard',function(){
    return view('admin.dashboard.dashboard');
});
Route::get('asset/management', function(){
    return view('admin.assetsManagement.assetManagement');
});

Route::get('asset/maintance', function(){
    return view('admin.assetsManagement.maintance');
});