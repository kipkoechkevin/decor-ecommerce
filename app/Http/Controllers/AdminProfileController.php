<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function adminProfile()
    {
        $profile = Admin::find(1);
        return view('admin.profile', compact('profile'));
    }

    public function updateProfile()
    {
        $updated = Admin::find(1);
        return view('admin.edit_profile', compact('updated'));
    }

    public function store(Request $request)
    {
        $profile = Admin::find(1);

        $profile->name = $request->name;
        $profile->email = $request->email;

        if ($request->file('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            @unlink(public_path('uploads/admin/' . $profile->profile_photo_path));
            $filename = date('Ymdhis') . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/admin'), $filename);
            $profile['profile_photo_path'] = $filename;
        }

        $profile->save();

        $notification = array(
            'message' => "Profile updated Successfully",
            'alert-type' =>'success'
        );

        return redirect()->route('admin.profile')->with($notification);
    }
}
