@extends('layouts.app')
@section('content')
@include('layouts.menubar')
  <div class="contact_form" style="margin-top:-50px">

    <div class="container">
      <div class="row">
        <div class="col-9 card">
          <div class="card-title mt-4 text-center">
          </div>
          <table class="table table-response">
            <div class="container">
              <form action="{{ route('password.update') }}" method="POST"> @csrf
                <div class="form-group">
                  <label for="old_password">Password Lama</label>
                  <input type="password" name="old_password" id="old_password" class="form-control">
                  @error('old_password')
                    <div class="text-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="new_password">Pasword</label>
                  <input type="password" name="password" id="password" class="form-control">
                  @error('password')
                    <div div class="text-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Password</button>
              </form>
            </div>
          </table>
        </div>
        @include('layouts.profile_user')
      </div>
    </div>
    <div class="panel"></div>
  </div>
@include('layouts.footer')
@endsection
