<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingActivity;
use App\Models\BookingRoom;
use App\Models\BookingService;
use App\Models\Payment;
use App\Models\RoomCategory;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    //bookingNew
    public function bookingNew(){
        $dataType = Booking::latest()->paginate(10);

        return view('admin.pages.booking.new')->with(compact( 'dataType'));
    }
    // bookingAddNew
    public function bookingAddNew(){
        return view('admin.pages.booking.add');
    }
    // bookingAddNewView
    public function bookingAddNewView(Request $req){

        $booking = new Booking();
        $booking->user_id = $req->user_id;
        $booking->checkin = $req->checkin;
        $booking->checkout = $req->checkout;
        $booking->total_night = $req->total_night;
        $booking->max_adults = $req->max_adults;
        $booking->max_children = $req->max_children;
        $booking->save();

        // room
        for ($i=0; $i < count($req->room_ids); $i++) {
            BookingRoom::insert([
                "booking_id" => $booking->id,
                "room_id" => $req['room_nos'][$i],
                "room_category_id" => $req['room_ids'][$i],
                "tax" => $req['room_taxs'][$i],
                "amount" => $req['room_amounts'][$i],
            ]);
        }

        // Service
        for ($i=0; $i < count($req->service_ids); $i++) {
            BookingService::insert([
                "service_id" => $req['service_ids'][$i],
                "booking_id" => $booking->id,
                "qty" => $req['service_quantitys'][$i],
                "tax" => $req['service_taxs'][$i],
                "amount" => $req['service_amounts'][$i],
            ]);
        }

        // activity
        for ($i=0; $i < count($req->activity_ids); $i++) {
            BookingActivity::insert([
                "activity_id" => $req['activity_ids'][$i],
                "booking_id" => $booking->id,
                "date" => $req['activity_dates'][$i],
                "tax" => $req['activity_taxs'][$i],
                "amount" => $req['activity_amounts'][$i],
            ]);
        }

        // payments
        for ($i=0; $i < count($req->payment_descriptions); $i++) {
            Payment::insert([
                "user_id" => $req->user_id,
                "booking_id" => $booking->id,
                "description" => $req['payment_descriptions'][$i],
                "date" => $req['payment_dates'][$i],
                "payment_method_id" => $req['payment_methods'][$i],
                "trx_id" => $req['payment_trxs'][$i],
                "amount" => $req['payment_amounts'][$i],
                "status" => true,
            ]);
        }


        return back()->with(['st' => true, 'msg' => 'You are successfully added a new booking!']);
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
