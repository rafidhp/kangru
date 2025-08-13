<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Advertiser;
use App\Models\Category;
use App\Services\HashidsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

        $image->storeAs('/public/advertisement/' . $hashids->encode($advertisement->id) . '_' . $image_name);

        return redirect()->route('advertiser.index')->withSuccess('Advertisement successfully created!');
    }

    public function view(HashidsService $hashids, $ad_id)
    {
        $id = $hashids->decode($ad_id);
        $ad = Advertisement::findOrFail($id);

        return view('advertiser.advertisement.view', compact('ad'));
    }

    public function edit(HashidsService $hashids, $ad_id)
    {
        $id = $hashids->decode($ad_id);
        $ad = Advertisement::findOrFail($id);
        $categories = Category::all();

        return view('advertiser.advertisement.edit', compact('ad', 'categories'));
    }

    public function update(Request $request, HashidsService $hashids, $ad_id)
    {
        $id = $hashids->decode($ad_id);
        $ad = Advertisement::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:100|min:3',
            'image' => 'image|mimes:png,jpg,jpeg,gif,svg,webp|max:10240',
            'description' => 'required|min:10',
            'category_id' => 'required|integer',
        ]);

        if ($request->image != null) {
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();

            $ad->update([
                'title' => $request->title,
                'image' => $image_name,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);

            $image->storeAs('/public/advertisement/' . $hashids->encode($ad->id) . '_' . $image_name);
        } else {
            $ad->update([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category_id,
            ]);
        }

        return redirect()->route('advertiser.index')->withSuccess('Advertisement successfully updated!');
    }

    public function destroy(HashidsService $hashids, $ad_id)
    {
        $id = $hashids->decode($ad_id);
        $ad = Advertisement::findOrFail($id);

        $image_path = 'advertisement/' . $ad_id . '_' . $ad->image;

        if (Storage::disk('public')->exists($image_path)) {
            Storage::disk('public')->delete($image_path);
        }
        $ad->delete();

        return redirect()->route('advertiser.index')->withSuccess('Advertisement deleted successfully!');
    }
}
