@extends('layouts.app')
@section('content')
@php 
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
            <h3>List Sewa Barang</h3>
          </div>
          <table class="table table-response mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Sewa</th>
                <th scope="col">Tanggal Sewa</th>
                <th scope="col">Jam Sewa</th>
                <th scope="col">Total Biaya Sewa</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status Sewa</th>
                <th scope="col" class="text-center">Invoice</th>
                <th scope="col" class="text-center">Bukti Pembayaran</th>
                <th scope="col" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @foreach($peminjaman as $row)
            <tr >
              @if($row->status_peminjaman == 1 || $row->status_peminjaman == 2)
                <td scope="col" ><h5>{{ $no++ }}</h5></td>
                <td scope="col" ><h5>{{ $row->kodeSewa }}</h5></td>
                <td scope="col"><h5>{{ date('d-M-Y', strtotime($row->tanggalPeminjaman)) }}</h5></td>
                <td scope="col"><h5>{{ $row->jamPeminjaman }}</h5></td>
                <td scope="col"><h5>{{ $row->totalBiayaSewa }}</h5></td>
                <td scope="col"><h5>{{ $row->keterangan }}</h5></td>
                <td scope="col">
                  @if($row->status_peminjaman == 1)
                  <div class="badge progress-bar-warning mt-3">Proses</div>
                  @elseif($row->status_peminjaman == 2)
                  <div class="badge progress-bar-info mt-3">Sewa</div>
                  @endif
                </td>
                <td scope="col">
                  <a href="{{ url('user/invoice/peminjaman/'.$row->id .'/' .$row->sewaId) }}" class="btn btn-primary btn-sm mt-3" style="margin-left:20px">Invoice</a>
                </td>
                <td>
                  @if($row->pembayaran == 1 && $row->bukti_pembayaran === NULL)
                  <button id="{{ $row->kodeSewa }}" type="button" class="btn btn-success btn-sm" style="margin-left:40px" data-toggle="modal" data-target="#uploadBukti" onclick="uploadBukti(this.id)">Upload</button>
                  @endif
                </td>
              @endif
                <td>
                  @if($row->status_peminjaman == 1 && $row->bukti_pembayaran === NULL)
                  <a href="{{ url('user/ubah-sewa/'.$row->kodeSewa) }}" class="btn btn-warning btn-sm">Ubah</a>
                  <br>
                  <a href="{{ url('user/batal-sewa/'.$row->kodeSewa) }}" id="batalSewa" class="btn btn-danger btn-sm">Batal</a>
                  @endif
                </td>
            </tr>
            @endforeach
            </tbody>
          </table>
          <div class="pagination mt-5">
            {{ $peminjaman->links() }}
          </div>
        </div>
        @include('layouts.profile_user')
      </div>
    </div>
  <div class="panel"></div>
</div>
<div class="modal" id="uploadBukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered " role="document" >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="upload_bukti_form" method="POST" enctype="multipart/form-data" action="{{ route('upload.bukti') }}"> {{ csrf_field() }}
          <div class="form-row">
            <div class="col">
              <label for="formGroupExampleInput">Kode Sewa </label>
              <input type="text" id="kodeSewa" class="form-control"  name="kodeSewa" readonly>
            </div>
          </div>
          <div class="form-row">
            <div class="col mt-3">
              <label for="formGroupExampleInput">Nominal DP</label>
              <input type="text" id="nominal_dp" class="form-control" name="nominal_dp" readonly>
            </div>
          </div>
          <div class="form-group mt-5">
            <label for="exampleFormControlFile1">Upload bukti pembayaran DP</label>
            <input type="file" class="form-control-file" name="bukti_pembayaran" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-primary" id="uploadBtn">Upload</button>
        </form>
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
<script src="{{asset('frontend-theme/js/jquery-3.3.1.min.js')}}"></script>

<script>
  function uploadBukti(id){
    function rupiah(angka){
            var rupiah = '';		
            var angkarev = angka.toString().split('').reverse().join('');
            for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
            return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    }
    $.ajax({
        url: '{{ url('/user/uploadbukti/') }}/'+id,
        type: 'GET',
        dataType: 'json',
        cache:false,
        success: function(data){
          $('#kodeSewa').val(data.detailSewa.kodeSewa);
          $('#nominal_dp').val(rupiah(data.bayarDP));
        },
    });
  }

</script>
<script>
$("#uploadBtn").click(function () {
    var postData = new FormData($("#upload_bukti_form")[0]);
    $.ajax({
        type:'POST',
        url:'{{ url('/user/upload/buktiPembayaran') }}',
        processData: false,
        contentType: false,
        data : postData,
        success:function(data){
          console.log("File Uploaded");
        }
      });
  });
</script>
<script>  
  $(document).on("click", "#batalSewa", function(e){
      e.preventDefault();
      var link = $(this).attr("href");
          swal({
            title: "Anda yakin akan membatalkan sewa?",
            text: "",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                window.location.href = link;
            } else {
              swal("Cancel");
            }
          });
      });
</script>

@endsection
