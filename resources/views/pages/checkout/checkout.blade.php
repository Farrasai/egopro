@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="cart_section">
  <div class="container">
          @if(Auth::check())
          <form action="{{ route('final.checkout') }}" method="POST" id="formFinal"> @csrf
            <div class="row">
              <div class="col-lg-2 col-sm-12">
            
              </div>
              <div class="col-lg-8 col-sm-12">
                <div class="list-form" style="color:rgba(0,0,0,0.5)">
                  <div class="card mt-3">
                    <div class="card-header text-center">
                      Form Penyewaan
                    </div> 
                    <div class="card-body" >
                      <div class="form-group row" >
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Nama</label>
                        <div class="col-sm-12">
                          <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Email</label>
                        <div class="col-sm-12">
                          <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required readonly>
                        </div>
                      </div>
                      @if(Auth::user()->address)
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-12 col-form-label">Alamat</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="address"  value="{{ Auth::user()->address }}" required readonly>
                          </div>
                        </div>
                      @else
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-12 col-form-label">Alamat</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control text-danger" name="address"  value="Lengkapi data alamat anda pada form profile" required readonly>
                          </div>
                        </div>
                      @endif
                      @if(Auth::user()->nohp)
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-12 col-form-label">No HP</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control" name="nohp" value="{{ Auth::user()->nohp }}" required readonly>
                          </div>
                        </div>
                      @else
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-12 col-form-label">No HP</label>
                          <div class="col-sm-12">
                            <input type="text" class="form-control text-danger" name="nohp" value="Lengkapi data nomor handphone anda pada form profile" required readonly>
                          </div>
                        </div>
                      @endif
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Tarif / Hari</label>
                        <div class="col-sm-12">
                          <input type="text" id="tarif" class="form-control" name="total" value="Rp.{{Cart::total()}}" required readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Tanggal Penyewaan | Tanggal Pengembalian | Lama Sewa</label>
                        <div class="row">
                          <div class="col-4">
                            <div class="input-group ml-4 mt-2">
                              <input type="text" class="form-control" id="datetimepickerSewa" name="tanggalSewa" required autocomplete="off">
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="input-group mt-2">
                              <input type="text" class="form-control" id="datetimepickerPengembalian" name="tanggalPengembalian" required autocomplete="off">
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                          </div>
                          <div class="col-3">
                            <div class="input-group mt-2" style="margin-left: -15px">
                              <input type="text" class="form-control" id="lama" name="lamaSewa" value="1 Hari" readonly>
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
                          <input type="text" id="totalTarif" class="form-control"  value="Rp.{{Cart::total()}}" required readonly>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label">Jam Sewa | Jam Pengembalian</label>
                        <div class="row">
                          <div class="col-6">
                            <div class="input-group ml-4 mt-2">
                              <input type="text" class="form-control" id="jamSewa" name="jamSewa" required autocomplete="off" value="{{ old('jamSewa') }}">
                              <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="input-group ml-4 mt-2">
                              <input type="text" class="form-control" id="jamPengembalian" name="jamPengembalian" required autocomplete="off" value="{{ old('jamPengembalian') }}"> 
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
                            <li><input type="radio" name="bayar" value="1"> DP</li>
                            <li><input type="radio" name="bayar" value="2"> Saat ambil barang</li>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-12 col-form-label ml-4 mt-2">Note</label>
                        <p class="col-sm-12 col-form-label ml-4 mt-2">Apabila anda akan melakukan DP, silahkan kirim ke 3330xxxxxxx BCA a.n Rendi. Konfirnmasi akan dikirim lewat email</p>
                      </div>                    
                    </div>
                  </div>
                </div>
                @if(Auth::user()->address && Auth::user()->nohp)
                <div class="checkout" style="margin-top: -25px">
                  <div class="cart_buttons">        
                    <a href="{{ route('show.cart') }}" class="button cart_button_clear">Kembali</a>
                    <button type="submit" class="button cart_button_checkout" id="sewa">Sewa</button>
                  </div>
                </div>
                @endif
              </div>
              <div class="col-lg-2 col-sm-12"></div>
            </div>
          </form>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel"></div>
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
    $total = Cart::total();
    $harga_str = preg_replace("/[^0-9]/", "",  $total);
    $total_int = (int) $harga_str;
  @endphp

  btnGet.addEventListener('click', () =>{
    var konversiJangkaWaktu = parseInt(jangkaWaktu.value);
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