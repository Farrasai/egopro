@extends('layouts.app')
@section('content')
@php 
  $sewa = DB::table('sewa')
          ->join('peminjaman_barang', 'sewa.id', 'peminjaman_barang.sewaId')
          ->join('pengembalian_barang', 'sewa.id', 'pengembalian_barang.sewaId')
          ->where('sewa.userId', Auth::id())
          ->orderBy('sewa.id', 'DESC')
          ->paginate(5);
  $no = 1;
@endphp
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
        <div class="col-9 card  bg-light">
          <div class="card-title mt-4 text-center">
            <h3>Riwayat Penyewaan</h3>
          </div>
          <table class="table table-response mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Sewa</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Total Biaya Sewa</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($sewa as $row)
              <tr >
                @if($row->status == 2)
                <td scope="col" ><h5>{{ $no++ }}</h5></td>
                <td scope="col" ><h5>{{ $row->kodeSewa }}</h5></td>
                <td scope="col"><h5>{{ date('d-m-Y', strtotime($row->tanggalPeminjaman)) }}</h5></td>
                <td scope="col"><h5>{{ date('d-m-Y', strtotime($row->tanggalPengembalian))}}</h5></td>
                <td scope="col"><h5>{{ $row->totalBiayaSewa }}</h5></td>
                <td scope="col"><a href="{{ url('user/riwyat-sewa/detail/'.$row->kodeSewa) }}" class="btn btn-primary btn-sm" >Detail</a></td>
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
          <div class="pagination mt-5">
            {{ $sewa->links() }}
          </div>
        </div>
        @include('layouts.profile_user')
      </div>
    </div>
    <div class="panel"></div>
  </div>
@include('layouts.footer')
<script>
  $date = '09-08-2020';
  alert($conv);
</script>
@endsection
