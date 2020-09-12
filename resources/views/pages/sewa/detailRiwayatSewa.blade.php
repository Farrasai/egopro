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
        <div class="col-12 card">
          <div class="card-title mt-4 text-center">
            <h3>Detail Riwayat Sewa</h3>
          </div>
          <table class="table table-response mt-5">
            <thead>
              <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center" >Kode Barang</th>
                <th scope="col" class="text-center">Barang</th>
                <th scope="col" class="text-center">Nama Barang</th>
                <th scope="col" class="text-center">Tipe/Jenis</th>
                <th scope="col" class="text-center">Biaya Sewa/Hari</th>
                <th scope="col" class="text-center">Quantity</th>
                <th scope="col" class="text-center">Sub Total</th>

              </tr>
            </thead>
            <tbody class="align-items-center" >
              @php
                $no = 1;    
              @endphp
              @foreach ($dataDetail as $row)
              <tr>
                <td style="line-height: 65px" class="text-center">{{ $no++ }}</td>
                <td style="line-height: 65px" class="text-center">{{ $row->kode_barang }}</td>
                <td style="line-height: 65px" class="m-auto"><center><img src="{{ url( $row->image ) }}" style="width: 120px; height:80px;"></center></td>
                <td style="line-height: 65px" class="text-center">{{ $row->product_name }}</td>
                @if($row->jenis)
                <td style="line-height: 65px" class="text-center">{{ $row->jenis }}</td>
                @else
                <td style="line-height: 65px" class="text-center"> - </td>
                @endif
                <td style="line-height: 65px" class="text-center">{{ rupiah($row->biayaSewa) }}</td>
                <td style="line-height: 65px" class="text-center">{{ $row->quantity }}</td>
                <td style="line-height: 65px" class="text-center">{{ rupiah($row->subBiayaSewa) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="panel"></div>
  </div>
@include('layouts.footer')
@endsection
