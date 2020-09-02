<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;


class UserController extends Controller
{
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
