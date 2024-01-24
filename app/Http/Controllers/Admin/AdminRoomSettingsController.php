<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class AdminRoomSettingsController extends Controller
{
    //floorList
    public function floorList() {
        $dataType = Floor::orderBy('id', 'ASC')->paginate(10);
        return view("admin.pages.room-settings.floor-list.list")->with(compact('dataType'));
    }
    // floorAdd
    public function floorAdd(Request $request) {

        $floor = new Floor;
        $floor->name = $request->name;
        $floor->no_room = $request->no_room;
        $floor->st_room = $request->st_room;
        $floor->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new floor!']);
    }
    // floors
    public function floors() {
        $dataType = Floor::orderBy('id', 'ASC')->get();
        return view("admin.pages.room-settings.floor-list.floors")->with(compact('dataType'));
    }

    //roomCategory
    public function roomCategory() {
        $dataType = Room::orderBy('id', 'ASC')->paginate(10);
        $room = Room::latest()->first();

        return view("admin.pages.room-settings.room-category.list")->with(compact('dataType', 'room'));
    }
    // roomCategoryAddView
    public function roomCategoryAddView() {
        return view("admin.pages.room-settings.room-category.add");
    }
    // roomCategoryAdd
    public function roomCategoryAdd(Request $request)
    {
        $files = [];

        foreach ($request->file('img') as $i=>$file) {
            $fileName = time()."$i.".$file->getClientOriginalExtension();
            $file->move(public_path('images/rooms'), $fileName);

            $files[] = [
                $fileName,
            ];
        }

        $room = new Room;
        $room->title = $request->title;
        $room->subtitle = $request->subtitle;
        $room->description = $request->description;
        $room->max_child = $request->max_child;
        $room->max_adults = $request->max_adults;
        $room->facility = $request->facility;
        $room->price = $request->price;
        $room->img = $files;
        $room->room_size = $request->room_size;
        $room->bed_no = $request->bed_no;
        $room->bed_id = $request->bed_id;
        $room->save();

        $floorIds = Floor::latest()->select('id')->get();
        $room->floors->attach($floorIds);

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new room category!']);
    }
    // roomCategoryAssignView
    public function roomCategoryAssignView() {
        $dataType = Floor::orderBy('id', 'ASC')->get();
        $roomCategory = Room::latest()->get();

        return view("admin.pages.room-settings.room-category.assing")->with(compact('dataType', 'roomCategory'));
    }
    // roomCategoryAssign
    public function roomCategoryAssign(Request $request, Room $room) {

        $room->assign_room = $request->rooms;
        $room->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new room category!']);
    }

    //couponCode
    public function couponCode() {
        return view("admin.pages.room-settings.coupon-code.list");
    }

}
