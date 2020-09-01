@extends('adminowner.layouts.admin_layout')

@section('admin_content')

<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

  <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
    <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Egopro <span class="tx-info tx-normal">Admin</span></div>
    <div class="tx-center mg-b-60">Professional Admin Template Design</div>
    <form method="POST" action="{{ route('admin.login') }}">
      @csrf
      <div class="form-group">
        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Enter your username">

        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div><!-- form-group -->

      <div class="form-group">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your pasword">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div><!-- form-group -->
      <button type="submit" class="btn btn-info btn-block">Sign In</button>
    </form>

    <div class="mg-t-60 tx-center"></a></div>
    {{-- <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div> --}}
  </div><!-- login-wrapper -->
</div><!-- d-flex -->
@endsection
