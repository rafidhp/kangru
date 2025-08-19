<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Support\Facades\Auth;

class AdvertiserController extends Controller
{
    public function index()
    {
        $advertiser_id = Auth::user()->advertiser->id;
        $advertisements = Advertisement::where('advertiser_id', $advertiser_id)->get();

        return view('advertiser.index', compact('advertisements'));
    }
}