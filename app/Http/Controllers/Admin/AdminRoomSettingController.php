<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bed;
use App\Models\Facility;
use App\Models\Floor;
use App\Models\Room;
use App\Models\RoomCategory;
use App\Models\RoomSize;
use File;

class AdminRoomSettingController extends Controller
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

        for ($i=0; $i < $request->no_room; $i++) {
            $room_no = $request->st_room + $i;

            $room = new Room;
            $room->floor_name = "$room_no No Room";
            $room->room_no = $room_no;
            $room->floor_id = $floor->id;
            $room->assign = false;
            $room->save();
        }

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new floor!']);
    }
    // floorDelete
    public function floorDelete(Floor $floor) {

        Room::where('floor_id', $floor->id)->delete();
        $floor->delete();

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
        $dataType = RoomCategory::orderBy('id', 'ASC')->paginate(10);
        $roomCategory = RoomCategory::latest()->first();

        return view("admin.pages.room-settings.room-category.list")->with(compact('dataType', 'roomCategory'));
    }
    // roomCategoryAddView
    public function roomCategoryAddView() {
        $facility = Facility::latest()->get();
        $bedName = Bed::latest()->get();
        $roomSize = RoomSize::latest()->get();
        return view("admin.pages.room-settings.room-category.add")->with(compact('facility', 'bedName', 'roomSize'));
    }
    // roomCategoryUpdateView
    public function roomCategoryUpdateView(RoomCategory $roomCategory) {
        return view("admin.pages.room-settings.room-category.update")->with(compact('roomCategory'));
    }
    // roomCategoryUpdate
    public function roomCategoryUpdate(Request $request, RoomCategory $roomCategory) {

        $files = [];

        // images
        if(!empty($request->img)){
            foreach ($request->file('img') as $i=>$fileImgs) {
                $fileImgsName = time()."$i.".$fileImgs->getClientOriginalExtension();
                $fileImgs->move(public_path('images/rooms'), $fileImgsName);
                $files[] = $fileImgsName;
            }

            foreach (json_decode($roomCategory->img) as $value) {
                FIle::delete(public_path('images/rooms/'.$value));
            }
        }else{
            $files = json_decode($roomCategory->img);
        }

        // cover img
        if(!empty($request->file('cover'))){
            $fileCover = $request->file('cover');
            $coverImg = time()."-cover.".$fileCover->getClientOriginalExtension();
            $fileCover->move(public_path('images/rooms'), $coverImg);

            FIle::delete(public_path('images/rooms/'.$roomCategory->cover));
        }else{
            $coverImg = $roomCategory->cover;
        }

        $roomCategory->title = $request->title;
        $roomCategory->subtitle = $request->subtitle;
        $roomCategory->description = $request->description;
        $roomCategory->max_child = $request->max_child;
        $roomCategory->max_adults = $request->max_adults;
        $roomCategory->facility = !empty($request->facility) ? json_encode($request->facility) : array();
        $roomCategory->price = $request->price;
        $roomCategory->assign_room = array();
        $roomCategory->cover = $coverImg;
        $roomCategory->img = json_encode($files);
        $roomCategory->room_size = $request->room_size;
        $roomCategory->bed_no = $request->bed_no;
        $roomCategory->bed_id = $request->bed_id;
        $roomCategory->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update room category!']);
    }
    // roomCategoryDelete
    public function roomCategoryDelete(RoomCategory $roomCategory) {

        $thisRoom = Room::where('room_category_id', $roomCategory->id) -> get();

        foreach ($thisRoom as $key => $value) {
            Room::where('id', $value->id)->update([
                'room_category_id' => null,
                'assign' => false,
            ]);
        }

        $roomCategory->delete();

        return back()->with(['st' => true, 'msg' => 'You are successfully deleted a room category!']);
    }
    // roomCategoryAdd
    public function roomCategoryAdd(Request $request)
    {
        $files = [];
        // images
        foreach ($request->file('img') as $i=>$file) {
            $fileName = time()."$i.".$file->getClientOriginalExtension();
            $file->move(public_path('images/rooms'), $fileName);

            $files[] = $fileName;
        }

        // cover img
        if(!empty($request->file('cover'))){
            $file = $request->file('cover');
            $coverImg = time()."-cover.".$file->getClientOriginalExtension();
            $file->move(public_path('images/rooms'), $coverImg);
        }

        $roomCategory = new RoomCategory;
        $roomCategory->title = $request->title;
        $roomCategory->subtitle = $request->subtitle;
        $roomCategory->description = $request->description;
        $roomCategory->max_child = $request->max_child;
        $roomCategory->max_adults = $request->max_adults;
        $roomCategory->facility = $request->facility;
        $roomCategory->price = $request->price;
        $roomCategory->assign_room = array();
        $roomCategory->cover = $coverImg;
        $roomCategory->img = json_encode($files);
        $roomCategory->room_size = $request->room_size;
        $roomCategory->bed_no = $request->bed_no;
        $roomCategory->bed_id = $request->bed_id;
        $roomCategory->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new room category!']);
    }
    // roomCategoryAssignView
    public function roomCategoryAssignView(RoomCategory $roomCategory) {
        $dataType = Floor::orderBy('id', 'ASC')->get();
        $roomCategories = RoomCategory::latest()->get();

        return view("admin.pages.room-settings.room-category.assing")->with(compact('dataType', 'roomCategories', 'roomCategory'));
    }
    // roomCategoryAssign
    public function roomCategoryAssign(Request $request, RoomCategory $roomCategory) {

        $thisRoom = Room::where('room_category_id', $roomCategory->id) -> get();

        foreach ($thisRoom as $key => $value) {
            Room::where('id', $value->id)->update([
                'room_category_id' => null,
                'assign' => false,
            ]);
        }

        if(!empty($request->rooms)){
            foreach ($request->rooms as $key => $value) {
                Room::where('room_no', $value)->update([
                    'room_category_id' => $roomCategory->id,
                    'assign' => true,
                ]);
            }
        }

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new room category!']);
    }

    //couponCode
    public function couponCode() {
        return view("admin.pages.room-settings.coupon-code.list");
    }
}
