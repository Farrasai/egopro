@extends('layouts.app')
@section('content')
@php 
  $sewa = DB::table('sewa')
          ->join('sewa_details', 'sewa.id', 'sewa_details.sewaId')
          ->select('sewa.kodeSewa', 'sewa_details.*')
          ->where('sewa.userId', Auth::id())
          ->get();
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
        <div class="col-9 card">
          <div class="card-title mt-4 text-center">
            <h3>List Pengembalian Barang</h3>
          </div>
          <table class="table table-response mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Sewa</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Jam Pengembalian</th>
                <th scope="col">Total Biaya Sewa</th>
                <th scope="col">Status Pengembalian</th>

              </tr>
            </thead>
            <tbody>
            @foreach($pengembalian as $row)
              <tr >
                @if($row->status_pengembalian == 2 || $row->status_pengembalian == 3  || $row->status_pengembalian == 4 )
                <td scope="col" ><h5>{{ $no++ }}</h5></td>
                <td scope="col" ><h5>{{ $row->kodeSewa }}</h5></td>
                <td scope="col"><h5>{{ date('d-M-Y', strtotime($row->tanggalPengembalian)) }}</h5></td>
                <td scope="col"><h5>{{ $row->jamPengembalian }}</h5></td>
                <td scope="col"><h5>{{ $row->totalBiayaSewa }}</h5></td>
                <td scope="col">
                  @if($row->status_pengembalian == 2)
                  <div class="badge progress-bar-warning">Proses</div>
                  @elseif($row->status_pengembalian == 3)
                  <div class="badge progress-bar-warning">Pengembalian</div>
                  @elseif($row->status_pengembalian == 4)
                  <div class="badge progress-bar-danger">Denda</div>
                  @endif
                </td>
                @endif
              </tr>
            @endforeach
            </tbody>
          </table>
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
