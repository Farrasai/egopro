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
    @php
    // dd($arrTarif);    
    @endphp
    <div class="container">
      <div class="row">
        <div class="col-2"></div>

        <div class="col-8 card bg-light">
          <div class="card-title mt-4 text-center">
            <h3>Ubah Sewa</h3>
          </div>

          <div class="card text-center mb-5">
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col" >#</th>
                    <th scope="col" class="text-center">Kode Barang</th>
                    <th scope="col" class="text-center">Nama Barang</th>
                    <th scope="col" class="text-center">Quantity</th>
                    <th scope="col" class="text-center">Harga Sewa/Hari</th>
                    <th scope="col" class="text-center">Sub Total</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                  $no = 1;    
                  $arrTotal = array();
                  $lamaSewa = array();
                  @endphp
                  @foreach ($barangSewa as $row)
                  @php
                    array_push($arrTotal,$row->subBiayaSewa);
                    array_push($lamaSewa,$row->lamaSewa);
                  @endphp
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->kode_barang }}</td>
                    <td>{{ $row->product_name }}</td>
                    <td>{{ $row->quantity}}</td>
                    <td>{{ rupiah($row->biayaSewa)}}</td>
                    <td>{{ rupiah($row->subBiayaSewa) }}</td>
                  </tr>
                  @endforeach
                  @php
                    $total = rupiah(array_sum( $arrTotal));
                    // dd($row);
                  @endphp
                </tbody>
              </table>
            </div>

          </div>
          @foreach ($productSewa as $row)
              
        <form action="{{ route('ubahSewa') }}" method="POST">@csrf
          <input type="hidden" name="kodeSewa" value="{{ $row->kodeSewa }}">
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Tarif / Hari</label>
            <div class="col-sm-12">
              <input type="text" id="tarif" class="form-control"  value="{{ $total }}" required readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Tanggal Penyewaan | Tanggal Pengembalian | Lama Sewa</label>
            <div class="row">
              <div class="col-4">
                <div class="input-group ml-4 mt-2">
                  <input type="text" class="form-control" id="datetimepickerSewa" name="tanggalSewa" value="{{ $row->tanggalPeminjaman }}" required autocomplete="off">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-4">
                <div class="input-group mt-2">
                  <input type="text" class="form-control" id="datetimepickerPengembalian" name="tanggalPengembalian" value="{{ $row->tanggalPengembalian }}" required autocomplete="off">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-3">
                <div class="input-group mt-2" style="margin-left: -15px">
                  <input type="text" class="form-control" id="lama" name="lamaSewa" value="{{ $lamaSewa[0]}}" readonly>
                  <span class="input-group-addon" >
                    <span class="glyphicon glyphicon-time"></span>
                  </span>
                </div>
              </div>
              <div class="col-1">
                <div class="input-group mt-2" style="margin-left: -15px">
                  <div id="btn-get" class="btn btn-success btn-md" style="margin-left:-5px"><i class="fas fa-check-square"></i></div>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Total Tarif Sesuai Lama Sewa</label>
            <div class="col-sm-12">
              <input type="text" id="totalTarif" class="form-control" name="total" value="{{ $row->totalBiayaSewa }}" required readonly>
            </div>
          </div>

          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label">Jam Sewa | Jam Pengembalian</label>
            <div class="row">
              <div class="col-6">
                <div class="input-group ml-4 mt-2">
                  <input type="text" class="form-control" id="jamSewa" name="jamSewa" value="{{ $row->jamPeminjaman }}" required autocomplete="off">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
              <div class="col-6">
                <div class="input-group ml-4 mt-2">
                  <input type="text" class="form-control" id="jamPengembalian" name="jamPengembalian" value="{{ $row->jamPengembalian }}" required autocomplete="off">
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                  </span>
                </div>
              </div>
          </div>
        
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-12 col-form-label ml-4 mt-2">Pembayaran</label>
            <div class="col-sm-12 ml-4 mt-2">
              <ul class="logos_list">
                <li><input type="radio" name="bayar" value="1" {{ $row->pembayaran == 1 ? 'checked' : '' }}> DP</li>
                <li><input type="radio" name="bayar" value="2" {{ $row->pembayaran == 2 ? 'checked' : '' }}> Saat ambil barang</li>
            </div>
          </div>
          @endforeach
        </div>
        
        <div class="col-2"></div>
        <div class="form-group">        
          <a href="{{ route('userSewa.peminjaman') }}" class="btn btn-dark btn-lg">Kembali</a>
          <button type="submit" class="btn btn-primary btn-lg">Ubah</button>
        </div>
      </form>
      </div>
    </div>
    <div class="panel"></div>
  </div>
  
<script>
  function numberWithCommas(x) {
  var parts = x.toString().split(".");
  parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  return parts.join(".");
}

let btnGet = document.querySelector('#btn-get');
let jangkaWaktu = document.getElementById('lama');
let totalTarif = document.querySelector('#totalTarif');

@php
  $totalSewa = $total;
  $harga_str = preg_replace("/[^0-9]/", "",  $totalSewa);
  $total_int = (int) $harga_str;
@endphp

btnGet.addEventListener('click', () =>{
  var konversiJangkaWaktu = parseInt(jangkaWaktu.value);
  console.log(konversiJangkaWaktu);
  var total = {{ $total_int }};
  if(konversiJangkaWaktu === 0){
    alert('Minimal 1 hari sewa');
  }else if(isNaN(konversiJangkaWaktu )){
    alert('Error');
  }else{
    totalTarif.value = 'Rp.' + numberWithCommas(konversiJangkaWaktu * total ) ;
  }
})

</script>
@include('layouts.footer')
@endsection
