<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $redirectPath = "/admin/login";

    public function getDashboard()
    {
        return view('admin.dashboard');
    }

    public function postAdminLogin(Request $request){

        $email = $request->input("email");
        $password = $request->input("password");
        $checkerInfo = AdminGetLoginChecker($email, $password);
        //if logged in
        if($checkerInfo){
            return redirect('/admin/dashboard');
        }
        return back()->with('message','Incorrect User Email or Password');
    }

    public function getAdminLogin(){
        //if logged in
        if(Auth::check()){
            return redirect('/admin/dashboard');
        }
        return view('admin.adminLogin', ['name' => 'James']);
    }
    // logout
    public function AdminLogout(Request $request)
    {
        if (Logout($request)){
            return redirect('/admin/login');
        }

    }
}
