<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\haccp\HACCP01Controller;
use App\Http\Controllers\haccp\HACCP02Controller;
use App\Http\Controllers\haccp\HACCP03Controller;
use App\Http\Controllers\qc\haccp_01_controller;
use App\Http\Controllers\Plantmanager\PlantManagerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\qc\haccp_02_controller;
use App\Http\Controllers\qc\haccp_03_controller;
use App\Http\Controllers\qc\QcController;
use App\Http\Controllers\sqf\SQF03Controller;
use App\Http\Controllers\sqf\SQF01Controller;
use App\Http\Controllers\sqf\SQF02COntroller;
use App\Http\Controllers\superadmin\SuperadminController;
use App\Http\Controllers\supervisor\SupervisorController;
use App\Http\Controllers\supervisorVendorController;
use App\Http\Controllers\Supervisor\VendorController;
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

    Route::get('/', [SuperadminController::class, 'superadmin_Dashboard'])->name('superadmin');
    Route::prefix('superadmin/')->name('superadmin.')->group(function () {
        // admin Management
        Route::get('user/list', [SuperadminController::class, 'superadmin_user_list'])->name('user.list');
        Route::get('user/add', [SuperadminController::class, 'superadmin_user_add'])->name('user.add');
        Route::get('user/edit/{id}', [SuperadminController::class, 'superadmin_user_edit'])->name('user.edit');
        Route::post('user/update/{id}', [SuperadminController::class, 'superadmin_user_update'])->name('user.update');
        Route::post('user/add', [SuperadminController::class, 'superadmin_user_store'])->name('user.edit');
        Route::get('user/delete/{id}', [SuperadminController::class, 'superadmin_user_delete'])->name('user.delete');
        Route::get('user/view/{id}', [SuperadminController::class, 'superadmin_user_view'])->name('user.view');

        Route::get('profile', [SuperadminController::class, 'superadmin_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [SuperadminController::class, 'superadmin_profile_update'])->name('profile.update');
        Route::post('password/change', [SuperadminController::class, 'superadmin_password_change'])->name('profile.change');
    });
});

Route::middleware(['auth', 'role:1'])->group(function () {

    Route::get('/admin', [AdminController::class, 'AdminDashboard'])->name('dashboard');
    Route::prefix('admin/')->name('admin.')->group(function () {
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
    Route::prefix('plantmanager')->name('plantmanager.')->group(function () {
        Route::get('/', [PlantManagerController::class, 'Plant_Manager_Dashboard'])->name('dashboard');
        // profile--------
        Route::get('profile', [PlantManagerController::class, 'plantmanager_profile'])->name('profile');
        Route::post('profile/update', [PlantManagerController::class, 'plantmanager_profile_update'])->name('update');
        Route::post('password/change', [PlantManagerController::class, 'plantmanager_user_password_change'])->name('change');
    });
});

// Supervisor Routes
Route::middleware(['auth', 'role:3'])->group(function () {
    Route::get('/supervisor', [SupervisorController::class, 'supervisor_dashboard'])->name('supervisor');
    Route::prefix('supervisor/')->name('supervisor.')->group(function () {
        // Vendor Management
        Route::get('vendor/list', [VendorController::class, 'vandor_list'])->name('vendor.list');
        Route::get('vendor/add', [VendorController::class, 'vandor_add'])->name('vendor.add');
        Route::post('vendor/store', [VendorController::class, 'vandor_store'])->name('vendor.store');
        Route::get('vendor/upload', [VendorController::class, 'vandor_upload'])->name('vendor.upload');

        // profile--------
        Route::get('profile', [SupervisorController::class, 'supervisor_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [SupervisorController::class, 'supervisor_profile_update']);
        // Route::post('user/password/change', [SupervisorController::class, 'supervisor_user_password_change']);
    });
});

// QC Routes
Route::middleware(['auth', 'role:4'])->group(function () {
    Route::prefix('/qc')->name('qc.')->group(function () {
        Route::get('/', [QcController::class, 'Qc_Dashboard'])->name('dashboard');
        // profile--------
        Route::get('profile', [QcController::class, 'qc_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [QcController::class, 'qc_profile_update'])->name('profile.update');
        // Route::post('password/change', [QcController::class, 'qc_user_password_change'])->name('password.change');

        // ------------ sqf_01 ------------
        Route::get('sqf/01', [SQF01Controller::class, 'index'])->name('sqf_1.index');
        Route::get('sqf/01/add', [SQF01Controller::class, 'create'])->name('sqf_1.add');
        Route::post('sqf/01/add', [SQF01Controller::class, 'store'])->name('sqf_1.store');
        Route::get('sqf/01/show/{id}', [SQF01Controller::class, 'show'])->name('sqf_1.show');
        Route::get('sqf/01/edit/{id}', [SQF01Controller::class, 'edit'])->name('sqf_1.edit');
        Route::post('sqf/01/edit/{id}', [SQF01Controller::class, 'update'])->name('sqf_1.update');
        Route::delete('sqf/01/destroy/{id}', [SQF01Controller::class, 'destroy'])->name('sqf_1.destroy');

        // ------------ sqf_02 ------------
        Route::get('sqf/02', [SQF02COntroller::class, 'index'])->name('sqf_2.index');
        Route::get('sqf/02/add', [SQF02COntroller::class, 'create'])->name('sqf_2.add');
        Route::post('sqf/02/add', [SQF02COntroller::class, 'store'])->name('sqf_2.store');
        Route::get('sqf/02/show/{id}', [SQF02COntroller::class, 'show'])->name('sqf_2.show');
        Route::get('sqf/02/edit/{id}', [SQF02COntroller::class, 'edit'])->name('sqf_2.edit');
        Route::post('sqf/02/edit/{id}', [SQF02COntroller::class, 'update'])->name('sqf_2.update');
        Route::delete('sqf/02/destroy/{id}', [SQF02COntroller::class, 'destroy'])->name('sqf_2.destroy');

        // ------------ sqf_03 ------------
        Route::get('sqf/03', [SQF03Controller::class, 'index'])->name('sqf_3.index');
        Route::get('sqf/03/add', [SQF03Controller::class, 'create'])->name('sqf_3.add');
        Route::post('sqf/03/add', [SQF03Controller::class, 'store'])->name('sqf_3.store');
        Route::get('sqf/03/show/{id}', [SQF03Controller::class, 'show'])->name('sqf_3.show');
        Route::get('sqf/03/edit/{id}', [SQF03Controller::class, 'edit'])->name('sqf_3.edit');
        Route::post('sqf/03/edit/{id}', [SQF03Controller::class, 'update'])->name('sqf_3.update');
        Route::delete('sqf/03/destroy/{id}', [SQF03Controller::class, 'destroy'])->name('sqf_3.destroy');


        // ------------ haccp_01 ------------
        Route::get('haccp/01', [HACCP01Controller::class, 'index'])->name('haccp_1.index');
        Route::get('haccp/01/add', [HACCP01Controller::class, 'create'])->name('haccp_1.add');
        Route::post('haccp/01/add', [HACCP01Controller::class, 'store'])->name('haccp_1.store');
        Route::get('haccp/01/show/{id}', [HACCP01Controller::class, 'show'])->name('haccp_1.show');
        Route::get('haccp/01/edit/{id}', [HACCP01Controller::class, 'edit'])->name('haccp_1.edit');
        Route::post('haccp/01/edit/{id}', [HACCP01Controller::class, 'update'])->name('haccp_1.update');
        Route::delete('haccp/01/destroy/{id}', [HACCP01Controller::class, 'destroy'])->name('haccp_1.destroy');

        // Route::get('haccp/01', [haccp_01_controller::class, 'qc_haccp_01_add'])->name('haccp.add');

        // ------------ haccp_0 ------------
        Route::get('haccp/02', [HACCP02Controller::class, 'index'])->name('haccp_2.index');
        Route::get('haccp/02/add', [HACCP02Controller::class, 'create'])->name('haccp_2.add');
        Route::post('haccp/02/add', [HACCP02Controller::class, 'store'])->name('haccp_2.store');
        Route::get('haccp/02/show/{id}', [HACCP02Controller::class, 'show'])->name('haccp_2.show');
        Route::get('haccp/02/edit/{id}', [HACCP02Controller::class, 'edit'])->name('haccp_2.edit');
        Route::post('haccp/02/edit/{id}', [HACCP02Controller::class, 'update'])->name('haccp_2.update');
        Route::delete('haccp/02/destroy/{id}', [HACCP02Controller::class, 'destroy'])->name('haccp_2.destroy');

        // Route::get('haccp-02', [haccp_02_controller::class, 'qc_haccp_02_add'])->name('haccp_2.add');

        // ------------ haccp_03 ------------
        Route::get('haccp/03', [HACCP03Controller::class, 'index'])->name('haccp_3.index');
        Route::get('haccp/03/add', [HACCP03Controller::class, 'create'])->name('haccp_3.add');
        Route::post('haccp/03/add', [HACCP03Controller::class, 'store'])->name('haccp_3.store');
        Route::get('haccp/03/show/{id}', [HACCP03Controller::class, 'show'])->name('haccp_3.show');
        Route::get('haccp/03/edit/{id}', [HACCP03Controller::class, 'edit'])->name('haccp_3.edit');
        Route::post('haccp/03/edit/{id}', [HACCP03Controller::class, 'update'])->name('haccp_3.update');
        Route::delete('haccp/03/destroy/{id}', [HACCP03Controller::class, 'destroy'])->name('haccp_3.destroy');

        Route::get('haccp-03', [haccp_03_controller::class, 'qc_haccp_03_add'])->name('haccp_3.add');
    });
});



require __DIR__ . '/auth.php';
