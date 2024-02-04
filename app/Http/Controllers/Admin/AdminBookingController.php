<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    //bookingNew
    public function bookingNew(){
        $dataType = RoomCategory::orderBy('id', 'ASC')->paginate(10);
        $roomCategory = RoomCategory::latest()->first();

        return view('admin.pages.booking.new')->with(compact('dataType', 'roomCategory'));
    }
    // bookingAddNew
    public function bookingAddNew(){
        return view('admin.pages.booking.add');
    }

    // bookingCheckin
    public function bookingCheckin(){
        return view('admin.pages.booking.checkin');
    }

    // bookingCheckout
    public function bookingCheckout(){
        return view('admin.pages.booking.checkout');
    }

    // bookingRoom
    public function bookingRoom(){
        return view('admin.pages.booking.room');
    }
}
