<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bed;
use App\Models\Facility;
use App\Models\Floor;
use App\Models\RoomSize;
use Illuminate\Http\Request;
use File;

class AdminRoomAbilityController extends Controller
{
    //facility
    public function facility() {
        $dataType = Facility::latest()->paginate();
        return view("admin.pages.room-ability.facility.list")->with(compact('dataType'));
    }
    // facilityAdd
    public function facilityAdd(Request $request) {

        if(!empty($request->file('img'))){
            $file = $request->file('img');
            $fileName = time().".".$file -> getClientOriginalExtension();
            $file -> move(public_path('images/facility'), $fileName);
        }else{
            $fileName = "default.png";
        }

        $facility = new Facility;
        $facility->name = $request->name;
        $facility->description = $request->description;
        $facility->img = $fileName;
        $facility->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new facility!']);
    }
    // facilityUpdate
    public function facilityUpdate(Request $request, Facility $facility) {

        if(!empty($request->file('img'))){
            $file = $request->file('img');
            $fileName = time().".".$file -> getClientOriginalExtension();
            $file -> move(public_path('images/facility'), $fileName);
        }else{
            $fileName = $facility->img;
        }

        $facility->name = $request->name;
        $facility->description = $request->description;
        $facility->img = $fileName;
        $facility->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update facility!']);
    }
    // facilityDelete
    public function facilityDelete(Facility $facility) {
        File::delete(public_path('images/facility/'.$facility->img));
        $facility->delete();

        return back()->with(['st' => true, 'msg' => 'You are successfully deleted a facility!']);
    }

    //bedList
    public function bedList() {
        $dataType = Bed::latest()->paginate();
        return view("admin.pages.room-ability.bed-list.list")->with(compact('dataType'));
    }
    // bedListAdd
    public function bedListAdd(Request $request) {

        $bed = new Bed;
        $bed->name = $request->name;
        $bed->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new bed!']);
    }
    // bedListUpdate
    public function bedListUpdate(Request $request, Bed $bed) {

        $bed->name = $request->name;
        $bed->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update a bed!']);
    }
    // bedListDelete
    public function bedListDelete(Bed $bed) {
        $bed->delete();

        return back()->with(['st' => true, 'msg' => 'You are successfully deleted a facility!']);
    }

    //roomSize
    public function roomSize() {
        $dataType = RoomSize::latest()->paginate();
        return view("admin.pages.room-ability.room-size.list")->with(compact('dataType'));
    }

    // roomSizeAdd
    public function roomSizeAdd(Request $request) {

        $roomSize = new RoomSize;
        $roomSize->name = $request->name;
        $roomSize->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new room size!']);
    }
    // roomSizeUpdate
    public function roomSizeUpdate(Request $request, RoomSize $roomSize) {

        $roomSize->name = $request->name;
        $roomSize->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update a room size!']);
    }
    // roomSizeDelete
    public function roomSizeDelete(RoomSize $roomSize) {
        $roomSize->delete();

        return back()->with(['st' => true, 'msg' => 'You are successfully deleted a room size!']);
    }
}
