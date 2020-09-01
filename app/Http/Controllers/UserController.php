<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
  public function logout()
  {
    Auth::logout();
    $notification = array(
      'message' => 'Success Logout',
      'alert-type' => 'success'
    );

    return redirect()->route('login')->with($notification);
  }
}
