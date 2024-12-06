<?php

use App\Http\Controllers\admin\AdminController;

// ======== Plant Manager ========
use App\Http\Controllers\plantmanager\PlantManagerController;
use App\Http\Controllers\plantmanager\sqf\SQF01Controller as PMSQF01Controller;
use App\Http\Controllers\plantmanager\sqf\SQF02Controller as PMSQF02Controller;
use App\Http\Controllers\plantmanager\sqf\SQF03Controller as PMSQF03Controller;
use App\Http\Controllers\plantmanager\haccp\HACCP01Controller as PMHACCP01Controller;
use App\Http\Controllers\plantmanager\haccp\HACCP02Controller as PMHACCP02Controller;
use App\Http\Controllers\plantmanager\haccp\HACCP03Controller as PMHACCP03Controller;
use App\Http\Controllers\plantmanager\haccp\HACCP04Controller as PMHACCP04Controller;

// ======== QC ========
use App\Http\Controllers\qc\QcController;
use App\Http\Controllers\qc\sqf\SQF01Controller as QCSQF01Controller;
use App\Http\Controllers\qc\sqf\SQF02COntroller as QCSQF02COntroller;
use App\Http\Controllers\qc\sqf\SQF03Controller as QCSQF03Controller;
use App\Http\Controllers\qc\haccp\HACCP01Controller as QCHACCP01Controller;
use App\Http\Controllers\qc\haccp\HACCP02Controller as QCHACCP02Controller;
use App\Http\Controllers\qc\haccp\HACCP03Controller as QCHACCP03Controller;
use App\Http\Controllers\qc\haccp\HACCP04Controller as QCHACCP04Controller;

use App\Http\Controllers\superadmin\SuperadminController;
use App\Http\Controllers\supervisor\SupervisorController;
use App\Http\Controllers\supervisor\VendorController;
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


// admin Management
Route::middleware(['auth', 'role:1'])->group(function () {

    Route::get('/admin', [AdminController::class, 'AdminDashboard'])->name('admin');
    Route::prefix('admin/')->name('admin.')->group(function () {
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
// =================== End Supervisor Routes ===================




// =================== Plant Manager Routes ===================
Route::middleware(['auth', 'role:2'])->group(function () {
    Route::prefix('plantmanager')->name('plantmanager.')->group(function () {
        Route::get('/', [PlantManagerController::class, 'Plant_Manager_Dashboard'])->name('dashboard');
        // profile--------
        Route::get('profile', [PlantManagerController::class, 'plantmanager_profile'])->name('profile');
        Route::post('profile/update', [PlantManagerController::class, 'plantmanager_profile_update'])->name('update');
        Route::post('password/change', [PlantManagerController::class, 'plantmanager_user_password_change'])->name('change');


        // ------------ sqf_01 ------------
        Route::get('sqf/01', [PMSQF01Controller::class, 'index'])->name('sqf_1.index');
        Route::get('sqf/01/add', [PMSQF01Controller::class, 'create'])->name('sqf_1.add');
        Route::post('sqf/01/add', [PMSQF01Controller::class, 'store'])->name('sqf_1.store');
        Route::get('sqf/01/show/{id}', [PMSQF01Controller::class, 'show'])->name('sqf_1.show');
        Route::get('sqf/01/edit/{id}', [PMSQF01Controller::class, 'edit'])->name('sqf_1.edit');
        Route::post('sqf/01/edit/{id}', [PMSQF01Controller::class, 'update'])->name('sqf_1.update');
        Route::delete('sqf/01/destroy/{id}', [PMSQF01Controller::class, 'destroy'])->name('sqf_1.destroy');

        // ------------ sqf_02 ------------
        Route::get('sqf/02', [PMSQF02COntroller::class, 'index'])->name('sqf_2.index');
        Route::get('sqf/02/add', [PMSQF02COntroller::class, 'create'])->name('sqf_2.add');
        Route::post('sqf/02/add', [PMSQF02COntroller::class, 'store'])->name('sqf_2.store');
        Route::get('sqf/02/show/{id}', [PMSQF02COntroller::class, 'show'])->name('sqf_2.show');
        Route::get('sqf/02/edit/{id}', [PMSQF02COntroller::class, 'edit'])->name('sqf_2.edit');
        Route::post('sqf/02/edit/{id}', [PMSQF02COntroller::class, 'update'])->name('sqf_2.update');
        Route::delete('sqf/02/destroy/{id}', [PMSQF02COntroller::class, 'destroy'])->name('sqf_2.destroy');

        // ------------ sqf_03 ------------
        Route::get('sqf/03', [PMSQF03Controller::class, 'index'])->name('sqf_3.index');
        Route::get('sqf/03/add', [PMSQF03Controller::class, 'create'])->name('sqf_3.add');
        Route::post('sqf/03/add', [PMSQF03Controller::class, 'store'])->name('sqf_3.store');
        Route::get('sqf/03/show/{id}', [PMSQF03Controller::class, 'show'])->name('sqf_3.show');
        Route::get('sqf/03/edit/{id}', [PMSQF03Controller::class, 'edit'])->name('sqf_3.edit');
        Route::post('sqf/03/edit/{id}', [PMSQF03Controller::class, 'update'])->name('sqf_3.update');
        Route::delete('sqf/03/destroy/{id}', [PMSQF03Controller::class, 'destroy'])->name('sqf_3.destroy');


        // ------------ haccp_01 ------------
        Route::get('haccp/01', [PMHACCP01Controller::class, 'index'])->name('haccp_1.index');
        Route::get('haccp/01/add', [PMHACCP01Controller::class, 'create'])->name('haccp_1.add');
        Route::post('haccp/01/add', [PMHACCP01Controller::class, 'store'])->name('haccp_1.store');
        Route::get('haccp/01/show/{id}', [PMHACCP01Controller::class, 'show'])->name('haccp_1.show');
        Route::get('haccp/01/edit/{id}', [PMHACCP01Controller::class, 'edit'])->name('haccp_1.edit');
        Route::post('haccp/01/edit/{id}', [PMHACCP01Controller::class, 'update'])->name('haccp_1.update');
        Route::delete('haccp/01/destroy/{id}', [PMHACCP01Controller::class, 'destroy'])->name('haccp_1.destroy');


        // ------------ haccp_0 ------------
        Route::get('haccp/02', [PMHACCP02Controller::class, 'index'])->name('haccp_2.index');
        Route::get('haccp/02/add', [PMHACCP02Controller::class, 'create'])->name('haccp_2.add');
        Route::post('haccp/02/add', [PMHACCP02Controller::class, 'store'])->name('haccp_2.store');
        Route::get('haccp/02/show/{id}', [PMHACCP02Controller::class, 'show'])->name('haccp_2.show');
        Route::get('haccp/02/edit/{id}', [PMHACCP02Controller::class, 'edit'])->name('haccp_2.edit');
        Route::post('haccp/02/edit/{id}', [PMHACCP02Controller::class, 'update'])->name('haccp_2.update');
        Route::delete('haccp/02/destroy/{id}', [PMHACCP02Controller::class, 'destroy'])->name('haccp_2.destroy');


        // ------------ haccp_03 ------------
        Route::get('haccp/03', [PMHACCP03Controller::class, 'index'])->name('haccp_3.index');
        Route::get('haccp/03/add', [PMHACCP03Controller::class, 'create'])->name('haccp_3.add');
        Route::post('haccp/03/add', [PMHACCP03Controller::class, 'store'])->name('haccp_3.store');
        Route::get('haccp/03/show/{id}', [PMHACCP03Controller::class, 'show'])->name('haccp_3.show');
        Route::get('haccp/03/edit/{id}', [PMHACCP03Controller::class, 'edit'])->name('haccp_3.edit');
        Route::post('haccp/03/edit/{id}', [PMHACCP03Controller::class, 'update'])->name('haccp_3.update');
        Route::delete('haccp/03/destroy/{id}', [PMHACCP03Controller::class, 'destroy'])->name('haccp_3.destroy');


        // ------------ haccp_04 ------------
        Route::get('haccp/04', [PMHACCP04Controller::class, 'index'])->name('haccp_4.index');
        Route::get('haccp/04/add', [PMHACCP04Controller::class, 'create'])->name('haccp_4.add');
        Route::post('haccp/04/add', [PMHACCP04Controller::class, 'store'])->name('haccp_4.store');
        Route::get('haccp/04/show/{id}', [PMHACCP04Controller::class, 'show'])->name('haccp_4.show');
        Route::get('haccp/04/edit/{id}', [PMHACCP04Controller::class, 'edit'])->name('haccp_4.edit');
        Route::post('haccp/04/edit/{id}', [PMHACCP04Controller::class, 'update'])->name('haccp_4.update');
        Route::delete('haccp/04/destroy/{id}', [PMHACCP04Controller::class, 'destroy'])->name('haccp_4.destroy');
    });
});
// =================== / End Plant Manager Routes / ===================





// =================== QC Routes ===================
Route::middleware(['auth', 'role:4'])->group(function () {
    Route::prefix('/qc')->name('qc.')->group(function () {
        Route::get('/', [QcController::class, 'Qc_Dashboard'])->name('dashboard');
        // profile--------
        Route::get('profile', [QcController::class, 'qc_profile_edit'])->name('profile.edit');
        Route::post('profile/update', [QcController::class, 'qc_profile_update'])->name('profile.update');
        // Route::post('password/change', [QcController::class, 'qc_user_password_change'])->name('password.change');

        // ------------ sqf_01 ------------
        Route::get('sqf/01', [QCSQF01Controller::class, 'index'])->name('sqf_1.index');
        Route::get('sqf/01/add', [QCSQF01Controller::class, 'create'])->name('sqf_1.add');
        Route::post('sqf/01/add', [QCSQF01Controller::class, 'store'])->name('sqf_1.store');
        Route::get('sqf/01/show/{id}', [QCSQF01Controller::class, 'show'])->name('sqf_1.show');
        Route::get('sqf/01/edit/{id}', [QCSQF01Controller::class, 'edit'])->name('sqf_1.edit');
        Route::post('sqf/01/edit/{id}', [QCSQF01Controller::class, 'update'])->name('sqf_1.update');
        Route::delete('sqf/01/destroy/{id}', [QCSQF01Controller::class, 'destroy'])->name('sqf_1.destroy');

        // ------------ sqf_02 ------------
        Route::get('sqf/02', [QCSQF02COntroller::class, 'index'])->name('sqf_2.index');
        Route::get('sqf/02/add', [QCSQF02COntroller::class, 'create'])->name('sqf_2.add');
        Route::post('sqf/02/add', [QCSQF02COntroller::class, 'store'])->name('sqf_2.store');
        Route::get('sqf/02/show/{id}', [QCSQF02COntroller::class, 'show'])->name('sqf_2.show');
        Route::get('sqf/02/edit/{id}', [QCSQF02COntroller::class, 'edit'])->name('sqf_2.edit');
        Route::post('sqf/02/edit/{id}', [QCSQF02COntroller::class, 'update'])->name('sqf_2.update');
        Route::delete('sqf/02/destroy/{id}', [QCSQF02COntroller::class, 'destroy'])->name('sqf_2.destroy');

        // ------------ sqf_03 ------------
        Route::get('sqf/03', [QCSQF03Controller::class, 'index'])->name('sqf_3.index');
        Route::get('sqf/03/add', [QCSQF03Controller::class, 'create'])->name('sqf_3.add');
        Route::post('sqf/03/add', [QCSQF03Controller::class, 'store'])->name('sqf_3.store');
        Route::get('sqf/03/show/{id}', [QCSQF03Controller::class, 'show'])->name('sqf_3.show');
        Route::get('sqf/03/edit/{id}', [QCSQF03Controller::class, 'edit'])->name('sqf_3.edit');
        Route::post('sqf/03/edit/{id}', [QCSQF03Controller::class, 'update'])->name('sqf_3.update');
        Route::delete('sqf/03/destroy/{id}', [QCSQF03Controller::class, 'destroy'])->name('sqf_3.destroy');


        // ------------ haccp_01 ------------
        Route::get('haccp/01', [QCHACCP01Controller::class, 'index'])->name('haccp_1.index');
        Route::get('haccp/01/add', [QCHACCP01Controller::class, 'create'])->name('haccp_1.add');
        Route::post('haccp/01/add', [QCHACCP01Controller::class, 'store'])->name('haccp_1.store');
        Route::get('haccp/01/show/{id}', [QCHACCP01Controller::class, 'show'])->name('haccp_1.show');
        Route::get('haccp/01/edit/{id}', [QCHACCP01Controller::class, 'edit'])->name('haccp_1.edit');
        Route::post('haccp/01/edit/{id}', [QCHACCP01Controller::class, 'update'])->name('haccp_1.update');
        Route::delete('haccp/01/destroy/{id}', [QCHACCP01Controller::class, 'destroy'])->name('haccp_1.destroy');


        // ------------ haccp_0 ------------
        Route::get('haccp/02', [QCHACCP02Controller::class, 'index'])->name('haccp_2.index');
        Route::get('haccp/02/add', [QCHACCP02Controller::class, 'create'])->name('haccp_2.add');
        Route::post('haccp/02/add', [QCHACCP02Controller::class, 'store'])->name('haccp_2.store');
        Route::get('haccp/02/show/{id}', [QCHACCP02Controller::class, 'show'])->name('haccp_2.show');
        Route::get('haccp/02/edit/{id}', [QCHACCP02Controller::class, 'edit'])->name('haccp_2.edit');
        Route::post('haccp/02/edit/{id}', [QCHACCP02Controller::class, 'update'])->name('haccp_2.update');
        Route::delete('haccp/02/destroy/{id}', [QCHACCP02Controller::class, 'destroy'])->name('haccp_2.destroy');


        // ------------ haccp_03 ------------
        Route::get('haccp/03', [QCHACCP03Controller::class, 'index'])->name('haccp_3.index');
        Route::get('haccp/03/add', [QCHACCP03Controller::class, 'create'])->name('haccp_3.add');
        Route::post('haccp/03/add', [QCHACCP03Controller::class, 'store'])->name('haccp_3.store');
        Route::get('haccp/03/show/{id}', [QCHACCP03Controller::class, 'show'])->name('haccp_3.show');
        Route::get('haccp/03/edit/{id}', [QCHACCP03Controller::class, 'edit'])->name('haccp_3.edit');
        Route::post('haccp/03/edit/{id}', [QCHACCP03Controller::class, 'update'])->name('haccp_3.update');
        Route::delete('haccp/03/destroy/{id}', [QCHACCP03Controller::class, 'destroy'])->name('haccp_3.destroy');


        // ------------ haccp_04 ------------
        Route::get('haccp/04', [QCHACCP04Controller::class, 'index'])->name('haccp_4.index');
        Route::get('haccp/04/add', [QCHACCP04Controller::class, 'create'])->name('haccp_4.add');
        Route::post('haccp/04/add', [QCHACCP04Controller::class, 'store'])->name('haccp_4.store');
        Route::get('haccp/04/show/{id}', [QCHACCP04Controller::class, 'show'])->name('haccp_4.show');
        Route::get('haccp/04/edit/{id}', [QCHACCP04Controller::class, 'edit'])->name('haccp_4.edit');
        Route::post('haccp/04/edit/{id}', [QCHACCP04Controller::class, 'update'])->name('haccp_4.update');
        Route::delete('haccp/04/destroy/{id}', [QCHACCP04Controller::class, 'destroy'])->name('haccp_4.destroy');
    });
});
// =================== / End QC Routes / ===================


require __DIR__ . '/auth.php';
