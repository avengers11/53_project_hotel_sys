<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
Use FIle;

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

        $roomIds = Room::latest()->pluck('id')->toArray();
        $floor->rooms()->attach($roomIds);

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new floor!']);
    }
    // floorDelete
    public function floorDelete(Floor $floor) {

        $floor->delete();
        $floor->rooms()->detach();

        return back()->with(['st' => true, 'msg' => 'You are successfully deleted a floor!']);
    }
    // floorUpdate
    public function floorUpdate(Request $request, Floor $floor) {

        $floor->name = $request->name;
        $floor->no_room = $request->no_room;
        $floor->st_room = $request->st_room;
        $floor->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update a floor!']);
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
    // roomCategoryUpdateView
    public function roomCategoryUpdateView(Room $room) {
        return view("admin.pages.room-settings.room-category.update")->with(compact('room'));
    }
    // roomCategoryUpdate
    public function roomCategoryUpdate(Request $request, Room $room) {

        $files = [];

        // images 
        if(!empty($request->img)){
            foreach ($request->file('img') as $i=>$file) {
                $fileName = time()."$i.".$file->getClientOriginalExtension();
                $file->move(public_path('images/rooms'), $fileName);
                $files[] = [
                    $fileName,
                ];
            }

            foreach ($room->img['0'] as $value) {
                Storage::delete(public_path('images/rooms/'.$value));
            }
        }else{
            $files = $room->img;
        }

        // cover img 
        if(!empty($request->file('cover'))){
            $file = $request->file('cover');
            $coverImg = time()."-cover.".$file->getClientOriginalExtension();
            $file->move(public_path('images/rooms'), $coverImg);
            Storage::delete(public_path('images/rooms/'.$room->cover));
        }else{
            $files = $room->img;
        }

        // $floorIds = Floor::latest()->pluck('id')->toArray();
        // $room->floors()->attach($floorIds);

        // return back()->with(['st' => true, 'msg' => 'You are successfully added a new room category!']);
    }
    // roomCategoryAdd
    public function roomCategoryAdd(Request $request)
    {
        $files = [];

        // images 
        foreach ($request->file('img') as $i=>$file) {
            $fileName = time()."$i.".$file->getClientOriginalExtension();
            $file->move(public_path('images/rooms'), $fileName);

            $files[] = [
                $fileName,
            ];
        }

        // cover img 
        if(!empty($request->file('cover'))){
            $file = $request->file('cover');
            $coverImg = time()."-cover.".$file->getClientOriginalExtension();
            $file->move(public_path('images/rooms'), $coverImg);
        }

        $room = new Room;
        $room->title = $request->title;
        $room->subtitle = $request->subtitle;
        $room->description = $request->description;
        $room->max_child = $request->max_child;
        $room->max_adults = $request->max_adults;
        $room->facility = $request->facility;
        $room->price = $request->price;
        $room->assign_room = array();
        $room->cover = $coverImg;
        $room->img = $files;
        $room->room_size = $request->room_size;
        $room->bed_no = $request->bed_no;
        $room->bed_id = $request->bed_id;
        $room->save();

        $floorIds = Floor::latest()->pluck('id')->toArray();
        $room->floors()->attach($floorIds);

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
