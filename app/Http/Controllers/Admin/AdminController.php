<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use DB;
use Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function tes()
    {
        return view('adminPage');
    }

    public function index()
    {
        return view('adminowner.home');
    }

    public function showEdit()
    {
        $id = Auth::id();
        $data = DB::table('admins')->where('id', $id)->first();

        return view('adminowner.profile.editProfile', compact('data'));
    }


    public function updateProfile(Request $request)
    {
        $id = $request->id;
        $data = array();
        $data['username'] = $request->username;
        $data['name'] = $request->name;

        DB::table('admins')->where('id', $id)->update($data);
        $notification = array(
            'message' => 'Update Profile Success',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.edit')->with($notification);
    }

    public function updatePassword(Request $request)
    {
        $password = Auth::user()->password;
        $oldpass = $request->oldpass;
        $newpass = $request->password;
        $confirm = $request->password_confirmation;
        if (Hash::check($oldpass, $password)) {
            if ($newpass === $confirm) {
                $user = Admin::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Auth::logout();
                $notification = array(
                    'message' => 'Password Changed Successfully ! Now Login with Your New Password',
                    'alert-type' => 'success'
                );
                return redirect()->route('admin.login')->with($notification);
            } else {
                $notification = array(
                    'messege' => 'New password and Confirm Password not matched!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'Old Password not matched!',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function logout()
    {
        Auth::logout();
        $notification = array(
            'message' => 'Success Logout',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.login')->with($notification);
    }
}
