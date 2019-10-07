<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;

class AdminController extends Controller {

    public function authenticate(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $user = $data['adminuname'];
            $pwd = $data['adminpwd'];
            if (Auth::attempt(['email' => $user, 'password' => $pwd, 'role' => '1'])) {
                //Load the admin dashboard
                Session::put('adminSession', $user);
                return redirect('/admin/dashboard')->with('flash_message_success', 'Login Successfull');
            } else {
                return redirect()->back()->with('flash_message_error', 'Invalid Email/Password');
            }
        } else {
            return view('admin.login');
        }
    }

    public function dashboard() {
        if (Session::has('adminSession')) {
            return view('admin.dashboard');
        } else {
            return redirect('/admin')->with('flash_message_error', 'Access denied! Please Login first');
        }
    }

}
