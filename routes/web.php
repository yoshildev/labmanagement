<?php

use App\Http\Controllers\CreditRecordController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\FranchiseeController;
use App\Http\Controllers\InventoryMaterialsController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\StaffController;
use App\Models\Franchisee;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(FranchiseeController::class)->prefix('franchisee')->name('franchisee.')->middleware('Franchisee.auth')->group(function () {
    Route::get('login', 'login')->name('login')->withoutMiddleware('Franchisee.auth');
    Route::post('loginSubmit', 'loginSubmit')->name('loginSubmit')->withoutMiddleware('Franchisee.auth');
    Route::get('logout', 'logout')->name('logout');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::controller(DoctorController::class)->name('doctor.')->prefix('doctor')->group(function () {
        Route::get('add', 'add')->name('add');
        Route::get('update/{id?}', 'add')->name('update');
        Route::get('delete/{doctor?}', 'delete')->name('delete');
        Route::post('addSubmit', 'addSubmit')->name('addSubmit');
        Route::get('all', 'all')->name('all');
    });
    Route::controller(LabController::class)->name('lab.')->prefix('lab')->group(function () {
        Route::get('add', 'add')->name('add');
        Route::get('update/{id?}', 'add')->name('update');
        Route::get('delete/{lab?}', 'delete')->name('delete');
        Route::post('addSubmit', 'addSubmit')->name('addSubmit');
        Route::get('all', 'all')->name('all');
    });
    Route::controller(FranchiseeController::class)->name('sub-franchisee.')->prefix('sub-franchisee')->group(function () {
        Route::get('add', 'add')->name('add');
        Route::get('update/{id?}', 'add')->name('update');
        Route::post('addSubmit', 'addSubmit')->name('addSubmit');
        Route::get('all', 'all')->name('all');
    });

    Route::controller(StaffController::class)->name('staff.')->prefix('staff')->group(function () {
        Route::get('add', 'add')->name('add');
        Route::get('update/{id?}', 'add')->name('update');
        Route::post('addSubmit', 'addSubmit')->name('addSubmit');
        Route::get('all', 'all')->name('all');
    });

    Route::controller(CreditRecordController::class)->name('credits.')->prefix('credits')->group(function () {
        Route::get('add', 'add')->name('add');
        Route::get('addCredit', 'addCredit')->name('addCredit');
    });

    Route::controller(CreditRecordController::class)->name('credits.')->prefix('credits')->group(function () {
        Route::get('add', 'add')->name('add');
        Route::get('addCredit', 'addCredit')->name('addCredit');
    });

    Route::controller(InventoryMaterialsController::class)->name('inventory.')->prefix('inventory')->group(function () {
        Route::get('requeststock', 'requeststock')->name('requeststock');
    });
});
