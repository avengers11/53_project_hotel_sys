<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomCategory;
use App\Models\Service;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    //index
    public function index()
    {
        $dataType = Service::latest()->paginate(10);
        return view('admin.pages.service.view')->with(compact('dataType'));
    }

    // serviceAddView
    public function serviceAddView()
    {
        return view('admin.pages.service.add');
    }
    // serviceAdd
    public function serviceAdd(Request $req)
    {
        $service = new Service;
        $service->title = $req->title;
        $service->short_description = $req->short_description;
        $service->long_description = $req->long_description;
        $service->price = $req->price;
        $service->tax = $req->tax;
        $service->mandatory = $req->mandatory == 1 ? true : false;
        $service->room_ids = json_encode($req->room_ids);
        $service->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully added a new service!']);
    }

    // serviceUpdateView
    public function serviceUpdateView(Service $service)
    {
        return view('admin.pages.service.update')->with(compact('service'));
    }
    // serviceUpdate
    public function serviceUpdate(Request $req, Service $service)
    {
        $service->title = $req->title;
        $service->short_description = $req->short_description;
        $service->long_description = $req->long_description;
        $service->price = $req->price;
        $service->tax = $req->tax;
        $service->mandatory = $req->mandatory == 1 ? true : false;
        $service->room_ids = json_encode($req->room_ids);
        $service->save();

        return back()->with(['st' => true, 'msg' => 'You are successfully update a service!']);
    }

    // serviceDelete
    public function serviceDelete(Service $service)
    {
        $service->delete();

        return back()->with(['st' => true, 'msg' => 'You are successfully delete a service!']);
    }

}
