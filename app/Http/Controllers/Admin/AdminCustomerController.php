<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminCustomerController extends Controller
{
    //list
    public function list(){
        $users = User::orderBy('id', 'DESC')->where('status', 1)->paginate(10);
        return view('admin.pages.customer.list')->with(compact('users'));
    }

    // view
    public function view(){
        return view('admin.pages.customer.view');
    }

    // addView
    public function addView(){
        return view('admin.pages.customer.add');
    }

    // add
    public function add(Request $request){
        User::insert([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'password' => Hash::make($request->input('password')), // Hash the password
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'postcode' => $request->input('postcode'),
            'profession' => $request->input('profession'),
            'company' => $request->input('company'),
            'position' => $request->input('position'),
        ]);

        return redirect(route('admin.customer.list'))->with(['st' => true, 'msg' => 'You are successfully added a new customer!']);
    }

    // updateView
    public function updateView($id){
        $user = User::find($id);
        return view('admin.pages.customer.update')->with(compact('user'));
    }

    // update
    public function update(Request $request, User $user){
        User::where('id', $user->id)->update([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'email' => $request->input('email'),
            'number' => $request->input('number'),
            'password' => !empty($request->input('password')) ? $user->password : Hash::make($request->input('password')),
            'address' => $request->input('address'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'postcode' => $request->input('postcode'),
            'profession' => $request->input('profession'),
            'company' => $request->input('company'),
            'position' => $request->input('position'),
        ]);

        return redirect(route('admin.customer.list'))->with(['st' => true, 'msg' => 'You are successfully update your customer!']);
    }

    // delete
    public function delete(User $user){
        $user->delete();
        return redirect(route('admin.customer.list'))->with(['st' => true, 'msg' => 'You are successfully deleted your customer!']);
    }

}
