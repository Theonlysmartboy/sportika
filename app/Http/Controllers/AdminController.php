<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function authenticate(Request $request) {
        if ($request->isMethod('post')) {
            $data = $request->all();
        } else {
            return view('admin.login');
        }
    }

}
