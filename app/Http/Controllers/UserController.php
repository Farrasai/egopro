<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use DataTables;
use Auth;
use Hash;
use DB;
use Validator;
use Image;

class UserController extends Controller
{

  public function index()
  {
    return view('adminowner.user.index');
  }

  public function getAllUser()
  {
    $data = DB::table('users')->get();
    return Datatables::of($data)
      ->addColumn('action', function ($data) {
        $update = '<center><button class="btn btn-primary btn-icon mg-r-5 mg-b-10 edit" data-id="' . $data->id . '" id="edit"><div><i class="fa fa-pencil"></i></div></button>
            <button class="btn btn-danger btn-icon mg-r-5 mg-b-10 del" data-id="' . $data->id . '"><div><i class="fa fa-trash"></i></div></button></center>';
        return $update;
      })
      ->rawColumns(['action'])
      ->make(true);
  }

  public function edit($id)
  {
    $useredit =  DB::table('users')->where('id', $id)->get();
    return json_encode($useredit);
  }

  public function editProfile()
  {
    $id = Auth::id();
    $data = DB::table('users')->where('id', $id)->first();
    return view('pages.profile.editProfile', compact('data'));
  }

  public function delete($id)
  {
    DB::table('users')->where('id', $id)->delete();
    return response()->json(['msg' => '1']);
  }

  public function updateProfile(Request $request)
  {
    $id = $request->id;
    $old_avatar = $request->old_avatar;

    $request->validate([
      'noIdentitas' => 'min:16|max:16',
      'nohp' => 'string|min:11|max:13'
    ]);

    $data['name'] = $request->name;
    $data['email'] = $request->email;
    $data['nohp'] = $request->nohp;
    $data['noIdentitas'] = $request->noIdentitas;
    $data['address'] = $request->address;
    // $data['updated_at'] = Carbon::now();
    $avatar = $request->file('avatar');

    if (!empty($avatar)) {
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

  public function tambah(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'nama' => 'required',
      'email' => 'required',
      'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'noidentitas' => 'required',
      'nohp' => 'required',
      'pass' => 'required|string|min:8',
      'alamat' => 'required'
    ]);

    if ($validator->passes()) {

      $data['name'] = $request->nama;
      $data['email'] = $request->email;
      $avatar = $request->avatar;
      $avatar_name = date('dmy_H_s_i');
      $extension = strtolower($avatar->getClientOriginalExtension());
      $avatar_full_name = $avatar_name . '.' . $extension;
      $upload_path = 'media/profileUser/';
      $image_url = $upload_path . $avatar_full_name;
      $success = $avatar->move($upload_path, $avatar_full_name);
      $data['avatar'] = $image_url;
      $data['noIdentitas'] = $request->noidentitas;
      $data['nohp'] = $request->nohp;
      $data['password'] = bcrypt($request->pass);
      $data['address'] = $request->alamat;
      $data['created_at'] = Carbon::now();
      $update = DB::table('users')->insert($data);
      return response()->json(['msg' => '1']);
    }
    return response()->json(['error' => $validator->errors()->all(), 'msg' => '0']);
  }

  public function update(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'iduser' => 'required',
      'namaed' => 'required',
      'emailed' => 'required',
      'avatared' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      'noidentitased' => 'required',
      'nohped' => 'required',
      'passed' => 'string|min:8',
      'alamated' => 'required'
    ]);

    if ($validator->passes()) {
      $id = $request->iduser;

      $data['name'] = $request->namaed;
      $data['email'] = $request->emailed;
      $data['updated_at'] = Carbon::now();
      if (!empty($request->avatared)) {
        $avatar = $request->avatared;
        $avatar_name = date('dmy_H_s_i');
        $extension = strtolower($avatar->getClientOriginalExtension());
        $avatar_full_name = $avatar_name . '.' . $extension;
        $upload_path = 'media/profileUser/';
        $image_url = $upload_path . $avatar_full_name;
        $success = $avatar->move($upload_path, $avatar_full_name);
        $data['avatar'] = $image_url;
        $data['nohp'] = $request->nohped;
        if (!empty($request->passed)) {
          $data['password'] = bcrypt($request->passed);
        }
        $data['address'] = $request->alamated;
        $update = DB::table('users')->where('id', $id)->update($data);
        return response()->json(['msg' => '1']);
      } else {
        $data['noIdentitas'] = $request->noidentitased;
        $data['nohp'] = $request->nohped;
        $data['address'] = $request->alamated;
        $update = DB::table('users')->where('id', $id)->update($data);
        return response()->json(['msg' => '1']);
      }
    }
    return response()->json(['error' => $validator->errors()->all()]);
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
