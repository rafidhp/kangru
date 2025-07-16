<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthAdvertiserController extends Controller
{
    public function register()
    {
        return view('advertiser.auth.register');
    }

    public function postregister(Request $request)
    {
        $request->validate([]);
    }
}
