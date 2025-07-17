<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\User;
use App\Models\Advertiser;
use App\Services\HashidsService;

class AuthAdvertiserController extends Controller
{
    public function register()
    {
        return view('advertiser.auth.register');
    }

    public function postregister(Request $request, HashidsService $hashids)
    {
        $request->validate([
            'username' => 'required|string|unique:users,username|max:100|min:3',
            'name' => 'required|string|max:100|min:3',
            'email' => 'required|email|unique:users,email|max:100',
            'instansi' => 'required|string|max:100|min:3',
            'no_telepon' => 'required|numeric|min_digits:7|max_digits:15',
            'NPWP/SIUP' => 'required|mimes:pdf|max:10240',
            'password' => 'required|confirmed|min:6',
        ], [
            'username.required' => 'Username is required',
            'username.unique' => 'Username already exists',
            'username.max' => 'Username must not exceed 100 characters',
            'username.min' => 'Username must be at least 3 characters',
            'name.required' => 'Name is required',
            'name.max' => 'Name must not exceed 100 characters',
            'name.min' => 'Name must be at least 3 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email format',
            'email.unique' => 'Email already exists',
            'email.max' => 'Email must not exceed 100 characters',
            'password.required' => 'Password is required',
            'password.confirmed' => 'Password confirmation does not match',
            'password.min' => 'Password must be at least 6 characters long',
        ]);

        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'advertiser',
        ]);

        $file = $request->file('NPWP/SIUP');
        $file_name = $file->getClientOriginalName();
        $directory = storage_path('/app/public/npwp_siup');

        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        Advertiser::create([
            'no_telepon' => $request->no_telepon,
            'instansi' => $request->instansi,
            'NPWP/SIUP' => $file_name,
            'status' => 'pending',
            'user_id' => $user->id,
        ]);

        $file->storeAs('public/npwp_siup/' . $hashids->encode($user->id) . '_' . $file_name);

        return redirect()->route('advertiser.index')->withSuccess('Registration successful! You can now login!');
    }
}