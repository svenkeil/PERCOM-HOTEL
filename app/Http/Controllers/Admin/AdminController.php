<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Admin\Role;
use DB;
use App\Mail\UserBanNotification;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $users = User::all();
        //roles
        $roles = Role::all();
        if (Auth::check()){
        return view('admin.admin',compact('users','roles'));
        }
        return view('user.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Admins(Request $request)
    {
        if ($request->isMethod('GET')) {
           return view('admin.admin');
        }
    }

    /*public function login(){
        if (Auth::check() && Auth::user()->role=="admin") {
            return redirect()->route('admin-dashboard');
        }
        return view('admin.login');
    }
    */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Members(Request $request)
    {
        if ($request->isMethod('GET')) {
           return view('admin.members');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function processLogin(Request $request)
    {
        $validator= Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        // return $request->all();
        $data = request()->except(['_token']);
        if (Auth::attempt($data)) {
            $user=Auth::user();
            if ($user->role=="admin") {
                return redirect()->route('admin-dashboard');
            }
            Auth::logout();

            // return redirect()->route('admin.login')->with(['message'=>'Invalid login credentials ,Try again later', 'type'=>'info']);
            return redirect()->route('user-login')->with(['message'=>'Invalid login credentials ,Try again later', 'type'=>'info']);

        }else{
            // return redirect()->route('admin.login')->with(['message'=>'Invalid login credentials ,Try again later', 'type'=>'info']);
            return redirect()->route('user-login')->with(['message'=>'Invalid login credentials ,Try again later', 'type'=>'info']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Admin will ban user if they wish to
     *
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function banUser(Request $request)
    {


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function logOut(){
        Auth::logout();
        // return redirect()->route('admin.login');
        return redirect()->route('user-login');
    }
}
