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
                <td scope="col">
                  <button type="button" id="{{ $row->kodeSewa }}" class="btn btn-primary" data-toggle="modal" data-target="#detailSewa" onclick="detailSewa(this.id)">
                    Detail
                  </button>
                  {{-- <a href="{{ url('user/riwyat-sewa/detail/'.$row->kodeSewa) }}" class="btn btn-primary btn-sm" >Detail</a> --}}
                </td>
                {{-- <td scope="col"><a href="{{ url('user/riwyat-sewa/detail/'.$row->kodeSewa) }}" class="btn btn-primary btn-sm" >Detail</a></td> --}}
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
    <div class="panel"></div>
  </div>

 <!-- Modal -->
<div class="modal" id="detailSewa" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered " role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table table-striped table-response mt-5" id="tableRiwayat">
          <thead>
            <tr>
              <th scope="col" class="text-center" >Kode Barang</th>
              <th scope="col" class="text-center">Barang</th>
              <th scope="col" class="text-center">Nama Barang</th>
              <th scope="col" class="text-center" style="width: 60px">Tipe/Jenis</th>
              <th scope="col" class="text-center">Biaya Sewa/Hari</th>
              <th scope="col" class="text-center">Quantity</th>
              <th scope="col" class="text-center">Sub Total</th>
            </tr>
          </thead>
          <tbody class="align-items-center" >
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

{{-- Ajax detail sewa --}}
<script>
  function detailSewa(id){
    function rupiah(angka){
            var rupiah = '';		
            var angkarev = angka.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    }
    
    $.ajax({
        url: '{{ url('/user/riwayat-sewa/detail/') }}/'+id,
        type: 'GET',
        dataType: 'json',
        async:true,
        cache:false,
        success: function(data){
          var table =  $('#tableRiwayat > tbody').empty();
          $.each(data.dataDetail,function(index,item){
            var el =
            `
              <tr id=${index}>
                  <td style="text-align:center">${item.kode_barang}</td>
                  <td><center><img src=${item.image} style="width: 80px; height:60px;"></center></td>
                  <td style="text-align:center">${item.product_name}</td>
                  <td style="text-align:center">${item.jenis == null ? '-' : item.jenis}</td>
                  <td style="text-align:center">${rupiah(item.biayaSewa)}</td>
                  <td style="text-align:center">${item.quantity}</td>
                  <td style="text-align:center">${rupiah(item.subBiayaSewa)}</td>
              </tr>
            `;
            $('#tableRiwayat > tbody').append(el);
          });
        },
        error:function(error){
          console.log(error);
        }
    });
  }
</script>

@endsection
