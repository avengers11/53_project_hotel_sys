<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRoomAbilityController extends Controller
{
    //facility
    public function facility() {
        return view("admin.pages.room-ability.facility.list");
    }

    //bedList
    public function bedList() {
        return view("admin.pages.room-ability.bed-list.list");
    }

    //bedSize
    public function bedSize() {
        return view("admin.pages.room-ability.bed-size.list");
    }
}
