<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use App\Services\HashidsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdvertisementController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        return view('advertiser.advertisement.create', compact('categories'));
    }

    public function store(Request $request, HashidsService $hashids)
    {
        $request->validate([
            'title' => 'required|string|max:100|min:3',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg,webp|max:10240',
            'description' => 'required|min:10',
            'upload_date' => 'required|date',
            'category_id' => 'required|integer',
        ]);

        $advertiser_id = Auth::user()->advertiser->id;

        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $directory = storage_path('/app/public/advertisement');

        if (! File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $advertisement = Advertisement::create([
            'title' => $request->title,
            'image' => $image_name,
            'description' => $request->description,
            'upload_date' => $request->upload_date,
            'category_id' => $request->category_id,
            'advertiser_id' => $advertiser_id,
        ]);

        $image->storeAs('/public/advertisement/'.$hashids->encode($advertisement->id).'_'.$image_name);

        return redirect()->route('advertiser.index')->withSuccess('Advertisement successfully created!');
    }
}
