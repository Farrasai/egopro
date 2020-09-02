@extends('layouts.app')
@section('content')
@include('layouts.menubar')
  <div class="contact_form" style="margin-top:-50px">
    @if(Auth::check() && !Auth::user()->email_verified_at)
    <div class="row justify-content-center">
      <div class="col-11">
        <div class="verify alert alert-danger">
          Akun anda belum di verifikasi
          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Click untuk memverifikasi</button>.
          </form>
        </div>
      </div>
    </div>
    @endif
    <div class="container">
      <div class="row">
        <div class="col-9 card">
          <div class="card-title mt-4 text-center">
            <h3>Riwayat Penyewaan</h3>
          </div>
          <table class="table table-response mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Barang</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr style="line-height: 70px">
                <td scope="col" >1</td>
                <td scope="col"><img src="{{ asset('frontend-theme/images/single_4.jpg') }}" style="width: 70px; height:70px;"></td>
                <td scope="col">Laptop</td>
                <td scope="col">03 September 2020</td>
                <td scope="col"><div class="badge badge-primary">Success</div></td>
              </tr>
            </tbody>
          </table>
        </div>
        @include('layouts.profile_user')
      </div>
    </div>
    <div class="panel"></div>
  </div>
@include('layouts.footer')
@endsection
