@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="contact_form">
  <div class="container">
    <div class="row" style="padding-bottom:150px">
      <div class="col-lg-5" style="border:1px solid grey; padding:20px; margin:auto; padding-bottom:70px ">
        <div class="contact_form_container">
          <div class="contact_form_title text-center">Sign In</div>
          <form method="POST" action="{{ route('login') }}">@csrf
            <div class="contact_form_text">
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
              </div>    

              <div class="form-group">Password</label>
                  <input type="password" class="form-control" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror 
              </div> 

              <label for=""><a href="{{ route('password.request') }}" class="text-primary">Lupa password ?</a></label>

            </div> 
            <div class="contact_form_button mt-3">
              <button type="submit" class="btn btn-info">Login</button>
            </div>
          </form>
        </div>
      </div> 
    </div>
  </div>
  <div class="panel"></div>
</div>
@include('layouts.footer')
@endsection