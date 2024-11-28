<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\haccp_01_controller;
use App\Http\Controllers\Plantmanager\PlantManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Qc\QcController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\supervisorVendorController;
use App\Http\Controllers\VendorController;
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


Route::middleware(['auth', 'role:0'])->group(function () {

    Route::get('/', [AdminController::class, 'AdminDashboard'])->name('superadmin');
    Route::prefix('superadmim/')->name('superadmim.')->group(function () {
        // admin Management
        Route::get('user/list', [AdminController::class, 'Admin_user_list'])->name('user.list');
        Route::get('user/add', [AdminController::class, 'Admin_user_add'])->name('user.add');
        Route::get('user/edit/{id}', [AdminController::class, 'Admin_user_edit'])->name('user.edit');
        Route::post('user/update/{id}', [AdminController::class, 'Admin_user_update'])->name('user.update');
        Route::post('user/add', [AdminController::class, 'Admin_user_store'])->name('user.edit');
        Route::get('user/delete/{id}', [AdminController::class, 'Admin_user_delete'])->name('user.delete');
        Route::get('user/view/{id}', [AdminController::class, 'Admin_user_view'])->name('user.view');

        Route::get('profile', [AdminController::class, 'user_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [AdminController::class, 'user_profile_update'])->name('profile.update');
        Route::post('password/change', [AdminController::class, 'user_password_change'])->name('profile.change');
    });
});

Route::middleware(['auth', 'role:1'])->group(function () {

    Route::prefix('admin/')->name('admin.')->group(function () {
        Route::get('/', [AdminController::class, 'AdminDashboard'])->name('Admin.Dashboard');
        // admin Management
        Route::get('user/list', [AdminController::class, 'Admin_user_list'])->name('user.list');
        Route::get('user/add', [AdminController::class, 'Admin_user_add'])->name('user.add');
        Route::get('user/edit/{id}', [AdminController::class, 'Admin_user_edit'])->name('user.edit');
        Route::post('user/update/{id}', [AdminController::class, 'Admin_user_update'])->name('user.update');
        Route::post('user/add', [AdminController::class, 'Admin_user_store'])->name('user.edit');
        Route::get('user/delete/{id}', [AdminController::class, 'Admin_user_delete'])->name('user.delete');
        Route::get('user/view/{id}', [AdminController::class, 'Admin_user_view'])->name('user.view');

        Route::get('profile', [AdminController::class, 'user_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [AdminController::class, 'user_profile_update'])->name('profile.update');
        Route::post('password/change', [AdminController::class, 'user_password_change'])->name('profile.change');
    });
});

// Plant Manager Routes
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('plantmanager', [PlantManagerController::class, 'Plant_Manager_Dashboard'])->name('dashboard');
    Route::prefix('plantmanager/')->name('admin.')->group(function () {
        // profile--------
        Route::get('profile', [PlantManagerController::class, 'plantmanager_profile'])->name('profile');
        Route::post('profile/update', [PlantManagerController::class, 'plantmanager_profile_update'])->name('update');
        Route::post('password/change', [PlantManagerController::class, 'plantmanager_user_password_change'])->name('change');
    });
});

// Supervisor Routes
Route::middleware(['auth', 'role:3'])->group(function () {
    Route::get('supervisor', [SupervisorController::class, 'supervisor_dashboard'])->name('supervisor');
    Route::prefix('supervisor/')->name('admin.')->group(function () {
        // Vendor Management
        Route::get('vendor/list', [VendorController::class, 'vandor_list'])->name('vendor.list');
        Route::get('vendor/add', [VendorController::class, 'vandor_add'])->name('vendor.add');
        Route::post('vendor/store', [VendorController::class, 'vandor_store'])->name('vendor.store');
        Route::get('vendor/upload', [VendorController::class, 'vandor_upload'])->name('vendor.upload');

        // profile--------
        Route::get('profile', [SupervisorController::class, 'supervisor_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [SupervisorController::class, 'supervisor_profile_update']);
        Route::post('user/password/change', [SupervisorController::class, 'supervisor_user_password_change']);
    });

});

// QC Routes
Route::middleware(['auth', 'role:4'])->group(function () {
    Route::get('qc', [QcController::class, 'Qc_Dashboard'])->name('qc.Dashboard');
    Route::prefix('qc/')->name('admin.')->group(function () {
        // profile--------
        Route::get('profile', [QcController::class, 'qc_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [QcController::class, 'qc_profile_update'])->name('profile.update');
        Route::post('password/change', [QcController::class, 'qc_user_password_change'])->name('password.change');

        // haccp-------
        Route::get('haccp-01', [haccp_01_controller::class, 'qc_haccp_01_add'])->name('haccp.add');
    });
});



require __DIR__ . '/auth.php';
