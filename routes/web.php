<?php

use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
// return view('login');
// });

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/admin/dashboard/contact', [DashboardAdminController::class, 'index'])->name('admin.dashboard.index');
Route::get('/admin/dashboard/profile', [ProfileController::class, 'index'])->name('admin.profile.index');
