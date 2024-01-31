<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminRoomAbilityController;
use App\Http\Controllers\Admin\AdminRoomSettingsController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('login', [AdminAccountController::class, 'login'])->name('login.view');

    // Route::middleware(['admin'])->group(function () {
        Route::get("/", [AdminDashboardController::class, 'dashboard'])->name('dashboard');

        // customer
        Route::prefix('customer')->name('customer.')->group(function(){
            Route::get("/", [AdminCustomerController::class, 'list'])->name('list');

            Route::get("/add", [AdminCustomerController::class, 'addView'])->name('add.view');
            Route::post("/add", [AdminCustomerController::class, 'add'])->name('add');

            Route::get("/update/{id}", [AdminCustomerController::class, 'updateView'])->name('update.view');
            Route::post("/update/{user}", [AdminCustomerController::class, 'update'])->name('update');

            Route::get("/delete/{user}", [AdminCustomerController::class, 'delete'])->name('delete');

            Route::get("/view/{id}", [AdminCustomerController::class, 'view'])->name('view');

            Route::get("/wake-up", [AdminCustomerController::class, 'wakeUp'])->name('wakeUp');
        });

        // room ability
        Route::prefix('room-ability')->name('room-ability.')->group(function(){
            Route::get("/facility", [AdminRoomAbilityController::class, 'facility'])->name('facility');
            Route::get("/bed-list", [AdminRoomAbilityController::class, 'bedList'])->name('bedList');
            Route::get("/bed-size", [AdminRoomAbilityController::class, 'bedSize'])->name('bedSize');
        });

        // room settings
        Route::prefix('room-settings')->name('room-settings.')->group(function(){
            Route::get("/floor-list", [AdminRoomSettingsController::class, 'floorList'])->name('floorList');
            Route::post("/floor-add", [AdminRoomSettingsController::class, 'floorAdd'])->name('floorAdd');
            Route::post("/floor-update/{floor}", [AdminRoomSettingsController::class, 'floorUpdate'])->name('floorUpdate');
            Route::get("/floor-delete/{floor}", [AdminRoomSettingsController::class, 'floorDelete'])->name('floorDelete');
            Route::get("/floors", [AdminRoomSettingsController::class, 'floors'])->name('floors');

            Route::get("/room-category", [AdminRoomSettingsController::class, 'roomCategory'])->name('roomCategory');
            Route::get("/room-category-add", [AdminRoomSettingsController::class, 'roomCategoryAddView'])->name('roomCategoryAdd.view');
            Route::get("/room-category-update/{roomCategory}", [AdminRoomSettingsController::class, 'roomCategoryUpdateView'])->name('roomCategoryUpdate.view');
            Route::post("/room-category-update/{roomCategory}", [AdminRoomSettingsController::class, 'roomCategoryUpdate'])->name('roomCategoryUpdate');
            Route::post("/room-category-add", [AdminRoomSettingsController::class, 'roomCategoryAdd'])->name('roomCategoryAdd');
            Route::get("/room-category-delete/{roomCategory}", [AdminRoomSettingsController::class, 'roomCategoryDelete'])->name('roomCategoryDelete');
            Route::get("/room-category-assign/{roomCategory?}", [AdminRoomSettingsController::class, 'roomCategoryAssignView'])->name('roomCategoryAssign.view');
            Route::post("/room-category-assign/{roomCategory?}", [AdminRoomSettingsController::class, 'roomCategoryAssign'])->name('roomCategoryAssign');

            Route::get("/coupon-code", [AdminRoomSettingsController::class, 'couponCode'])->name('couponCode');
        });


    // });

});
