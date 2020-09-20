@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="card bg-light col-lg-5 offset-lg-1" style="padding:20px; margin:auto">
                <div class="contact_form_container">
                    <div class="contact_form_title text-center">Sign Up</div>
                    <form method="POST" action="{{ route('register') }}">@csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control text-dark" name="name" aria-describedby="emailHelp" required placeholder="Masukan nama anda" value="{{ old('name')}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="text-dark form-control @error('nohp') is-invalid @enderror" name="nohp" value="{{ old('nohp') }}" aria-describedby="emailHelp" required placeholder="Masukan nomor handphone anda">
                        @error('nohp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor Identitas(KTP)</label>
                        <input type="text" class="text-dark form-control @error('noIdentitas') is-invalid @enderror" name="noIdentitas" value="{{ old('noIdentitas') }}" aria-describedby="emailHelp" required placeholder="Masukan nomor identitas anda">
                        @error('noIdentitas')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="text-dark form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" aria-describedby="emailHelp" required placeholder="Masukan email anda">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" class="text-dark form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" aria-describedby="emailHelp" required placeholder="Masukan alamat anda">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class=" text-dark form-control" name="password" aria-describedby="emailHelp" required placeholder="Masukan password anda" autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Confirm Password</label>
                        <input type="password" class=" text-dark form-control" name="password_confirmation" aria-describedby="emailHelp" required placeholder="Masukan ulang password anda">
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
