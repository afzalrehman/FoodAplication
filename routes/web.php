<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PlantManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QcController;
use App\Http\Controllers\SupervisorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('Admin.Dashboard');
    Route::get('admin/user/list', [AdminController::class, 'Admin_user_list']);
    Route::get('admin/user/add', [AdminController::class, 'Admin_user_add']);
    Route::get('logout', [AdminController::class, 'logout'])->name('logout');
    
});


Route::middleware(['auth', 'role:Plant_Manager'])->group(function () {
    Route::get('plantManager/dashboard', [PlantManagerController::class, 'Plant_Manager_Dashboard'])->name('plant.manager.Dashboard');
});


Route::middleware(['auth', 'role:QC'])->group(function () {
    Route::get('QC/dashboard', [QcController::class, 'Qc_Dashboard'])->name('qc.Dashboard');
});


Route::middleware(['auth', 'role:Supervisor'])->group(function () {
    Route::get('supervisor/dashboard', [SupervisorController::class, 'Supervisor_Dashboard'])->name('supervisor');
});


require __DIR__ . '/auth.php';
