<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;
use DB;
use Image;

class UserController extends Controller
{

  public function editProfile()
  {
    $id = Auth::id();
    $data = DB::table('users')->where('id', $id)->first();
    return view('pages.profile.editProfile', compact('data'));
  }

  public function updateProfile(Request $request)
  {
    $id = $request->id;
    $old_avatar = $request->old_avatar;

    $request->validate([
      'noIdentitas' => 'required|unique:users|min:16|max:16',
      'nohp' => 'string|min:11|max:13'
    ]);

    $data['name'] = $request->name;
    $data['noIdentitas'] = $request->noIdentitas;
    $data['email'] = $request->email;
    $data['address'] = $request->address;
    $data['nohp'] = $request->nohp;
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

    $update = DB::table('users')->where('id', $id)->update($data);
    if ($update) {
      $notification = array(
        'message' => 'Profile berhasil di ubah',
        'alert-type' => 'success'
      );
      return back()->with($notification);
    } else {
      $notification = array(
        'message' => 'Tidak ada profile yang di ubah',
        'alert-type' => 'warning'
      );
      return back()->with($notification);
    }
  }



  public function editPassword()
  {
    return view('auth.passwords.edit');
  }

  public function updatePassword()
  {
    request()->validate([
      'old_password' => 'required',
      'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $curentPassword = auth()->user()->password;
    $old_password = request('old_password');

    if (Hash::check($old_password, $curentPassword)) {
      auth()->user()->update([
        'password' => bcrypt(request('password')),
      ]);
      $notification = array(
        'message' => 'Password berhasil di ubah',
        'alert-type' => 'success'
      );
      return back()->with($notification);
    } else {
      return back()->withErrors(['old_password' => 'Password lama yang anda masukan salah']);
    }
  }


  public function logout()
  {
    Auth::logout();
    $notification = array(
      'message' => 'Success Logout',
      'alert-type' => 'success'
    );

    return redirect('/')->with($notification);
  }
}
