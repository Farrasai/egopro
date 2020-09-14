@extends('layouts.app')
@section('content')
@include('layouts.menubar')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between" style="background-color: rgb(226, 174, 174); color:#a94442">
                    <div class="text-uppercase font-weight-bold">
                        Silahkan verifikasi email anda
                    </div>
                    <div>
                        {{ Auth::user()->email }}
                    </div>
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Sebelum ke proses selanjutnya, silahkan verifikasi email anda. Cek email untuk memverifikasi.') }}
                    {{ __('Jika anda belum menerima email verifkasi') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik disini untuk meminta verifikasi email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="panel"></div>
@include('layouts.footer')
@endsection
