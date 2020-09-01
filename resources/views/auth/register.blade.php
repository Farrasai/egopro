@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1" style="border:1px solid gray; padding:20px; margin:auto">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign Up</div>
                    <form method="POST" action="{{ route('register') }}">@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" required placeholder="Enter your full name">
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" aria-describedby="emailHelp" required placeholder="Enter your number phone">
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required placeholder="Enter your email">
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" aria-describedby="emailHelp" required placeholder="Enter your password" autocomplete="new-password">
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" aria-describedby="emailHelp" required placeholder="Re-type password">
                    </div>
            
                    <div class="contact_form_button">
                        <button type="submit" class="btn btn-info">Sign Up</button>
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
