<?php

use App\Http\Controllers\Admin\AdminAccountController;
use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminBookingController;
use App\Http\Controllers\Admin\AdminCustomerController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminRoomAbilityController;
use App\Http\Controllers\Admin\AdminRoomSettingController;
use App\Http\Controllers\Admin\AdminServiceController;
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
        Route::post("/facility-add", [AdminRoomAbilityController::class, 'facilityAdd'])->name('facilityAdd');
        Route::post("/facility-update/{facility}", [AdminRoomAbilityController::class, 'facilityUpdate'])->name('facilityUpdate');
        Route::get("/facility-delete/{facility}", [AdminRoomAbilityController::class, 'facilityDelete'])->name('facilityDelete');

        Route::get("/bed-list", [AdminRoomAbilityController::class, 'bedList'])->name('bedList');
        Route::post("/bed-list-add", [AdminRoomAbilityController::class, 'bedListAdd'])->name('bedListAdd');
        Route::post("/bed-list-update/{bed}", [AdminRoomAbilityController::class, 'bedListUpdate'])->name('bedListUpdate');
        Route::get("/bed-list-delete/{bed}", [AdminRoomAbilityController::class, 'bedListDelete'])->name('bedListDelete');

        Route::get("/room-size", [AdminRoomAbilityController::class, 'roomSize'])->name('roomSize');
        Route::post("/room-size-add", [AdminRoomAbilityController::class, 'roomSizeAdd'])->name('roomSizeAdd');
        Route::post("/room-size-update/{roomSize}", [AdminRoomAbilityController::class, 'roomSizeUpdate'])->name('roomSizeUpdate');
        Route::get("/room-size-delete/{roomSize}", [AdminRoomAbilityController::class, 'roomSizeDelete'])->name('roomSizeDelete');
    });

    // room settings
    Route::prefix('room-settings')->name('room-settings.')->group(function(){
        Route::get("/floor-list", [AdminRoomSettingController::class, 'floorList'])->name('floorList');
        Route::post("/floor-add", [AdminRoomSettingController::class, 'floorAdd'])->name('floorAdd');
        Route::post("/floor-update/{floor}", [AdminRoomSettingController::class, 'floorUpdate'])->name('floorUpdate');
        Route::get("/floor-delete/{floor}", [AdminRoomSettingController::class, 'floorDelete'])->name('floorDelete');
        Route::get("/floors", [AdminRoomSettingController::class, 'floors'])->name('floors');

        Route::get("/room-category", [AdminRoomSettingController::class, 'roomCategory'])->name('roomCategory');
        Route::get("/room-category-add", [AdminRoomSettingController::class, 'roomCategoryAddView'])->name('roomCategoryAdd.view');
        Route::get("/room-category-update/{roomCategory}", [AdminRoomSettingController::class, 'roomCategoryUpdateView'])->name('roomCategoryUpdate.view');
        Route::post("/room-category-update/{roomCategory}", [AdminRoomSettingController::class, 'roomCategoryUpdate'])->name('roomCategoryUpdate');
        Route::post("/room-category-add", [AdminRoomSettingController::class, 'roomCategoryAdd'])->name('roomCategoryAdd');
        Route::get("/room-category-delete/{roomCategory}", [AdminRoomSettingController::class, 'roomCategoryDelete'])->name('roomCategoryDelete');
        Route::get("/room-category-assign/{roomCategory?}", [AdminRoomSettingController::class, 'roomCategoryAssignView'])->name('roomCategoryAssign.view');
        Route::post("/room-category-assign/{roomCategory?}", [AdminRoomSettingController::class, 'roomCategoryAssign'])->name('roomCategoryAssign');

        Route::get("/coupon-code", [AdminRoomSettingController::class, 'couponCode'])->name('couponCode');
    });

    // booking
    Route::prefix('booking')->name('booking.')->group(function(){
        Route::get("/new", [AdminBookingController::class, 'bookingNew'])->name('bookingNew');
        Route::get("/add-new", [AdminBookingController::class, 'bookingAddNew'])->name('bookingAddNew');

        Route::post("/add-newView", [AdminBookingController::class, 'bookingAddNewView'])->name('bookingAddNew.view');

        Route::get("/checkin", [AdminBookingController::class, 'bookingCheckin'])->name('bookingCheckin');
        Route::get("/checkout", [AdminBookingController::class, 'bookingCheckout'])->name('bookingCheckout');
        Route::get("/room", [AdminBookingController::class, 'bookingRoom'])->name('bookingRoom');
    });

    // service
    Route::prefix('service')->name('service.')->group(function(){
        Route::get("/", [AdminServiceController::class, 'index'])->name('serviceShow');
        Route::get("/add", [AdminServiceController::class, 'serviceAddView'])->name('serviceAdd.view');
        Route::get("/update/{service}", [AdminServiceController::class, 'serviceUpdateView'])->name('serviceUpdate.view');

        Route::post("/add", [AdminServiceController::class, 'serviceAdd'])->name('serviceAdd');
        Route::post("/update/{service}", [AdminServiceController::class, 'serviceUpdate'])->name('serviceUpdate');
        Route::get("/delete/{service}", [AdminServiceController::class, 'serviceDelete'])->name('serviceDelete');
    });

    // activity
    Route::prefix('activity')->name('activity.')->group(function(){
        Route::get("/", [AdminActivityController::class, 'index'])->name('activityShow');
        Route::get("/add", [AdminActivityController::class, 'activityAddView'])->name('activityAdd.view');
        Route::get("/update/{activity}", [AdminActivityController::class, 'activityUpdateView'])->name('activityUpdate.view');

        Route::post("/add", [AdminActivityController::class, 'activityAdd'])->name('activityAdd');
        Route::post("/update/{activity}", [AdminActivityController::class, 'activityUpdate'])->name('activityUpdate');
        Route::get("/delete/{activity}", [AdminActivityController::class, 'activityDelete'])->name('activityDelete');
    });

});
