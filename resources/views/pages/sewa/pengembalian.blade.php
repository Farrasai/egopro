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
        <div class="col-9 card  bg-light">
          <div class="card-title mt-4 text-center">
            <h3>List Pengembalian Barang</h3>
          </div>
          <table class="table table-response mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col" style="text-align: center">Kode</th>
                <th scope="col" style="text-align: center">Tanggal</th>
                <th scope="col" style="text-align: center">Jam</th>
                <th scope="col" style="text-align: center">Total Biaya</th>
                <th scope="col" style="text-align: center">Penyewa Mengembalikan</th>
                <th scope="col" style="text-align: center">Denda</th>
                <th scope="col" style="text-align: center">Status</th>
              </tr>
            </thead>
            <tbody>
            @foreach($pengembalian as $row)
            @php
              $tanggalAcc = $row->tanggalAcc;
              $getTanggal = explode(' ', $tanggalAcc);
              $userMengembalikan = $getTanggal[0];
            @endphp
              <tr >
                @if($row->status_pengembalian == 2 || $row->status_pengembalian == 3  || $row->status_pengembalian == 4 )
                  <td scope="col" style="text-align: center"><h5>{{ $no++ }}</h5></td>
                  <td scope="col" style="text-align: center"><h5>{{ $row->kodeSewa }}</h5></td>
                  <td scope="col"style="text-align: center"><h5>{{ date('d-M-Y', strtotime($row->tanggalPengembalian)) }}</h5></td>
                  <td scope="col" style="text-align: center"><h5>{{ $row->jamPengembalian }}</h5></td>
                  <td scope="col" style="text-align: center"><h5>{{ $row->totalBiayaSewa }}</h5></td>
                  @if($row->tanggalAcc)
                    <td scope="col" style="text-align: center"><h5>{{ date('d-M-Y', strtotime($userMengembalikan)) }}</h5></td>
                  @else
                    <td scope="col"><h5></h5></td>
                  @endif
                  @if($row->tanggalAcc)
                    @if($row->denda == 1)
                      <td scope="col"><h5><div class="badge progress-bar-info">Tidak</div></h5></td>
                    @else
                      <td scope="col"><h5><div class="badge progress-bar-danger">Ya</div></h5></td>
                    @endif
                  @else
                  <td scope="col"><h5><div class="badge progress-bar-info"></div></h5></td>
                  @endif
                  <td scope="col">
                    @if($row->status_pengembalian == 2)
                    <div class="badge progress-bar-warning mt-3" style="margin-left: 40px">Menunggu Pengembalian</div>
                    @elseif($row->status_pengembalian == 3)
                    <div class="badge progress-bar-success mt-3" style="margin-left: 40px">Sudah Dikembalikan</div>
                    @endif
                  @endif
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          <div class="pagination mt-5">
            {{ $pengembalian->links() }}
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
