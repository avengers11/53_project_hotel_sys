<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use Illuminate\Http\Request;

class AdminRoomAbilityController extends Controller
{
    //facility
    public function facility() {
        $dataType = Floor::orderBy('id', 'ASC')->paginate();
        return view("admin.pages.room-ability.facility.list")->with(compact('dataType'));
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
