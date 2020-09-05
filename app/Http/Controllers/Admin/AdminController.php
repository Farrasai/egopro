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
        $old_avatar = $request->old_avatar;

        $data = array();
        $data['username'] = $request->username;
        $data['name'] = $request->name;
        $avatar = $request->file('avatar');

        if ($avatar) {
            if ($old_avatar === null) {
                $avatar_name = date('dmy_H_s_i');
                $extension = strtolower($avatar->getClientOriginalExtension());
                $avatar_full_name = $avatar_name . '.' . $extension;
                $upload_path = 'media/profileUser/';
                $image_url = $upload_path . $avatar_full_name;
                $success = $avatar->move($upload_path, $avatar_full_name);
                $data['avatar'] = $image_url;
            } else {
                unlink($old_avatar);
                $avatar_name = date('dmy_H_s_i');
                $extension = strtolower($avatar->getClientOriginalExtension());
                $avatar_full_name = $avatar_name . '.' . $extension;
                $upload_path = 'media/profileUser/';
                $image_url = $upload_path . $avatar_full_name;
                $success = $avatar->move($upload_path, $avatar_full_name);
                $data['avatar'] = $image_url;
            }
        }

        $update = DB::table('admins')->where('id', $id)->update($data);
        if ($update) {
            $notification = array(
                'message' => 'Profile berhasil diubah',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Tidak ada profile yang di ubah',
                'alert-type' => 'warning'
            );
            return back()->with($notification);
        }
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
                    'message' => 'Password berhasil diubah, silahkan login dengan password baru',
                    'alert-type' => 'success'
                );
                return redirect()->route('admin.login')->with($notification);
            } else {
                $notification = array(
                    'message' => 'Password dan password confirmation tidak sesuai',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'Password lama tidak sesuai',
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
