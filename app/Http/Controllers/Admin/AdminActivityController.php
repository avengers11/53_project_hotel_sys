<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\Http\Request;

class AdminActivityController extends Controller
{
    //index
    public function index()
    {
        $dataType = Activity::latest()->paginate(10);
        return view('admin.pages.activity.view')->with(compact('dataType'));
    }

    // activityAddView
    public function activityAddView()
    {
        return view('admin.pages.activity.add');
    }
    // activityAdd
    public function activityAdd(Request $req)
    {
        $activity = new Activity;
        $activity->title = $req->title;
        $activity->subtitle = $req->subtitle;
        $activity->description = $req->description;
        $activity->max_child = $req->max_child;
        $activity->max_adults = $req->max_adults;
        $activity->max_people = $req->max_people;
        $activity->price = $req->price;
        $activity->duration = $req->duration;
        $activity->duration_unit = $req->duration_unit;
        $activity->latitude = $req->latitude;
        $activity->longitude = $req->longitude;
        $activity->mandatory = $req->mandatory == 1 ? true : false;
        $activity->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new activity!']);
    }

    // activityUpdateView
    public function activityUpdateView(Activity $activity)
    {
        return view('admin.pages.activity.update')->with(compact('activity'));
    }
    // activityUpdate
    public function activityUpdate(Request $req, Activity $activity)
    {
        $activity->title = $req->title;
        $activity->subtitle = $req->subtitle;
        $activity->description = $req->description;
        $activity->max_child = $req->max_child;
        $activity->max_adults = $req->max_adults;
        $activity->max_people = $req->max_people;
        $activity->price = $req->price;
        $activity->duration = $req->duration;
        $activity->duration_unit = $req->duration_unit;
        $activity->latitude = $req->latitude;
        $activity->longitude = $req->longitude;
        $activity->mandatory = $req->mandatory == 1 ? true : false;
        $activity->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update a activity!']);
    }

    // activityDelete
    public function activityDelete(Activity $activity)
    {
        $activity->delete();

        return back()->with(['st' => true, 'msg' => 'You are successfully delete a activity!']);
    }

}
