<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function userLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function userProfile()
    {
        $user = Auth::user();
        return view('frontend.user_profile',compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;

        if ($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('uploads/profiles/' .$data->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/profiles'), $filename);
            $data['profile_photo_path'] = $filename;
        }
        $data->save();

        $notification = array(
            'message' => 'User Profile Updated',
            'alert-type'=> 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function passwordChange()
    {
        $user = Auth::user();
        return view('frontend.password_change', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;

        if (Hash::check($request->oldpassword, $hashedPassword)){
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();

            $notification = array(
                'message' => 'User Password Updated',
                'alert-type'=> 'success'
            );

            Auth::logout();

            return redirect('dashboard')->with($notification);
        }else
        {
            return redirect()->back();
        }
    }
}
