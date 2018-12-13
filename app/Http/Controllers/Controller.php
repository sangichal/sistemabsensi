<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    function signIn(Request $request)
    {
        if (Auth::attempt(['NIK' => $request['username'], 'password' => $request['password']])) {
            return view('admin/home');
        } else {
            return redirect()->back();
        }
    }
}
