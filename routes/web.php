<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\haccp_01_controller;
use App\Http\Controllers\PlantManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QcController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\supervisorVendorController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
// Admin Routes
Route::middleware(['auth', 'role:Admin'])->group(function () {

    Route::get('/', [AdminController::class, 'AdminDashboard'])->name('Admin.Dashboard');

    // User Management
    Route::get('admin/user/list', [AdminController::class, 'Admin_user_list']);
    Route::get('admin/user/add', [AdminController::class, 'Admin_user_add']);
    Route::get('admin/user/edit/{id}', [AdminController::class, 'Admin_user_edit']);
    Route::post('admin/user/update/{id}', [AdminController::class, 'Admin_user_update']);
    Route::post('admin/user/add', [AdminController::class, 'Admin_user_store']);
    Route::get('admin/user/delete/{id}', [AdminController::class, 'Admin_user_delete']);
    Route::get('admin/user/view/{id}', [AdminController::class, 'Admin_user_view']);
    Route::get('profile', [AdminController::class, 'user_profile_edit'])->name('profile.edit');
    Route::post('profile/update', [AdminController::class, 'user_profile_update']);
    Route::post('user/password/change', [AdminController::class, 'user_password_change']);

    // Logout
    Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});

// Plant Manager Routes
Route::middleware(['auth', 'role:Plant_Manager'])->group(function () {
    Route::get('/plantmanager', [PlantManagerController::class, 'Plant_Manager_Dashboard'])->name('plantmanager.dashboard');

     // profile--------
     Route::get('plantmanager/profile', [PlantManagerController::class, 'plantmanager_profile'])->name('plantmanager.profile');
     Route::post('profile/update', [PlantManagerController::class, 'plantmanager_profile_update']);
     Route::post('user/password/change', [PlantManagerController::class, 'plantmanager_user_password_change']);

    // Logout
    Route::get('plantmanager/logout', [PlantManagerController::class, 'plantmanager_logout'])->name('plantmanager.logout');
});

// QC Routes
Route::middleware(['auth', 'role:QC'])->group(function () {
    Route::get('qc', [QcController::class, 'Qc_Dashboard'])->name('qc.Dashboard');

    // profile--------
    Route::get('profile', [QcController::class, 'qc_profile_edit'])->name('profile.edit');
    Route::post('profile/update', [QcController::class, 'qc_profile_update']);
    Route::post('user/password/change', [QcController::class, 'qc_user_password_change']);

    // haccp-------
    Route::get('qc/haccp-01', [haccp_01_controller::class, 'qc_haccp_01_add']);

    // Logout
    Route::get('QC/logout', [QcController::class, 'logout'])->name('qc.logout');
});

    // Supervisor Routes
Route::middleware(['auth', 'role:Supervisor'])->group(function () {
    Route::get('supervisor', [SupervisorController::class, 'supervisor_dashboard'])->name('supervisor');

    // Vendor Management
    Route::get('supervisor/vendor/list', [supervisorVendorController::class, 'vandor_list']);
    Route::get('supervisor/vendor/add', [supervisorVendorController::class, 'vandor_add']);
    Route::post('supervisor/vendor/store', [supervisorVendorController::class, 'vandor_store']);
    Route::get('supervisor/vendor/upload', [supervisorVendorController::class, 'vandor_upload']);


    // profile--------
    Route::get('profile', [SupervisorController::class, 'supervisor_profile_edit'])->name('profile.edit');
    Route::post('profile/update', [SupervisorController::class, 'supervisor_profile_update']);
    Route::post('user/password/change', [SupervisorController::class, 'supervisor_user_password_change']);


    // Logout
    Route::get('supervisor/logout', [SupervisorController::class, 'logout'])->name('supervisor.logout');
});

Route::get('admin/login', [AdminController::class, 'login'])->name('login');
Route::get('verify/{token}', [AdminController::class, 'verify'])->name('verify');
Route::get('forgot-password', [AdminController::class, 'forgot_password']);
Route::post('password/reset', [AdminController::class, 'forgot_password_post']);
Route::get('password/reset/{token}', [AdminController::class, 'reset_get']);
Route::post('password/store/{token}', [AdminController::class, 'reset_store']);

require __DIR__ . '/auth.php';
