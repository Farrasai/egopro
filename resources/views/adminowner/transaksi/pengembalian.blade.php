@extends('adminowner.layouts.admin_layout')

@section('admin_content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.index') }}">Dashboard</a>
        <a class="breadcrumb-item" href="#">Transaksi</a>
        <span class="breadcrumb-item active">Data Pengembalian</span>
      </nav>
        
      <div class="sl-pagebody">
      <div class="row">
          <div class="col-sm-3 col-md-9">
            <div class="sl-page-title">
              <h5>Data Pengembalian</h5>
                <p>Halaman Data Pengembalian Barang</p>
            </div>
            </div>
          </div>
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table table-hover table-bordered nowrap" style="width:100%">
              <thead class="bg-info">
                <tr>
                  <th>Kode Invoice</th>
                  <th>Nama</th>
                  <th>No Identitas</th>
                  <th>No HP</th>
                  <th>Jam Kembali</th>
                  <th>Tanggal Kembali</th>
                  <th>Tanggal Ambil</th>
                  <th>Aksi</th>
                </tr>
              </thead>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      <div id="modaldemo2" class="modal fade" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" style="max-width: 70vw;" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Detail Pengembalian</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <table>
                    <tr>
                        <td style="width: 30%;"><h5 class="lh-3">Kode Invoice</h5></td>
                        <td><h5 class="lh-3" id="kodesewa"></h5></td>
                    </tr>
                    <tr>
                        <td><p class="mg-b-5">Nama Penyewa</td>
                        <td class="reset" id="namaUser">:</td>
                    </tr>
                    <tr>
                        <td>No Identitas</td>
                        <td class="reset" id="noIdentitas">:</td>
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td class="reset" id="nohp">:</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top;text-align: left;">Alamat Lengkap</td>
                        <td class="reset" id="alamat"></td>
                    </tr>
                    <tr>
                        <td>Jam Kembali</td>
                        <td class="reset" id="jamKembali">:</td>
                    </tr>
                    <tr>
                        <td>Tanggal Kembali</td>
                        <td class="reset" id="tglKembali">:</td>
                    </tr>
                    <tr>
                        <td>Tanggal Ambil</td>
                        <td class="reset" id="tglAmbil">:</td></p>
                    </tr>
                    <tr>
                        <td>Total Biaya Sewa</td>
                        <td class="reset" id="biayaSewa">:</td></p>
                    </tr>
                    <tr>
                        <td>Pembayaran</td>
                        <td class="reset" id="pembayaran">:</td></p>
                    </tr>
                    <tr>
                        <td id="resetdp">Nominal DP</td>
                        <td class="reset" id="dp">:</td></p>
                    </tr>
                    <tr>
                        <td id="resetbukti">Bukti Pembayaran</td>
                        <td class="reset" id="bukti">:</td></p>
                    </tr>
                </table>
                <br><br>
                <h5 class="lh-3">Data Sewa Barang</h5>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered table-primary mg-b-0" id="myTable">
                    <thead>
                        <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Sewa</th>
                        <th>Harga Sewa</th>
                        <th>SubHarga Sewa</th>
                        </tr>
                    </thead>
                      <tr>
                        <td colspan="5"><center>Data Tidak Ditemukan</center></td>
                      </tr>
                    </table>
                </div>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
      </div>
        </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    <script type="text/javascript">
      $(document).ready(function() {
        $('.sl-menu-link').removeClass('active');
        $('#transaksi').addClass('show-sub');
        $('#transaksi2').addClass('active');

        function rupiah(angka){
          var rupiah = '';		
          var angkarev = angka.toString().split('').reverse().join('');
          for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
          return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
        }

        var bTable = $('#datatable1').DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          ajax: "/admin/transaksi/pengembalian/serverside",
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            processing: '<br><br><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Loading...</span>',
          },
          columns: 
          [
            {
              "data": 'kodeSewa',
              "name": 'kodeSewa',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'name',
              "name": 'name',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'noIdentitas',
              "name": 'noIdentitas',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'nohp',
              "name": 'nohp',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'jamPengembalian',
              "name": 'jamPengembalian',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'tanggalPengembalian',
              "name": 'tanggalPengembalian',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'tanggalPeminjaman',
              "name": 'tanggalPeminjaman',
              "orderable": true,
              "searchable": true
            },
            {
              data: 'action',
              name: 'action'
            }
          ]
        });

        $('#datatable1').on('click', '.detail', function (e) { 
          e.preventDefault();
          var sewaid = $(this).attr('data-id');
          $.ajax({
              type: "GET",
              url: "{{url('/admin/transaksi/pengembalian/detail')}}" + "/" + sewaid,
              dataType: "json",
              beforeSend: function(){
                Swal.fire({
                  html: '<br><br><i class="fa fa-circle-o-notch fa-spin" style="font-size:100px"></i><br><br>',
                  showConfirmButton: false
                })
              },
              complete: function(){
                Swal.close();
                $('#modaldemo2').modal('show');
              },
              success: function (data) {
                $('.reset').html(': ');
                $('#kodesewa').html(data.sewa.kodeSewa);
                $('#namaUser').append(data.sewa.name);
                $('#noIdentitas').append(data.sewa.noIdentitas);
                $('#alamat').append(data.sewa.address);
                $('#nohp').append(data.sewa.nohp);
                $('#jamKembali').append(data.sewa.jamPengembalian);
                $('#tglAmbil').append(data.sewa.tanggalPeminjaman);
                $('#tglKembali').append(data.sewa.tanggalPengembalian);
                $('#biayaSewa').append(data.sewa.totalBiayaSewa);
                if(data.sewa.pembayaran == '1') {
                  $('#pembayaran').append('Transfer DP');
                  $('#resetdp').html('Nominal DP : ');
                  $('#resetbukti').html('Bukti Pembayaran : ');
                  $('#dp').append(data.sewa.nominal_DP);
                  $('#bukti ').append("<a href='../../" + data.sewa.bukti_pembayaran + "' target='_blank'> Klik Disini Untuk Lihat Bukti</a>");
                } else {
                  $('#pembayaran').append('Bayar Ditempat');
                  $('#dp').html('');
                  $('#bukti ').html('');
                  $('#resetdp').html('');
                  $('#resetbukti').html('');
                }

                var rows = '';
                $.each(data.sewa_detail, function (i, val) {
                   rows += "<tr><td>" + val.kode_barang + "</td><td>" + val.namaProduct + "</td><td>" + val.quantity + "</td><td>" + rupiah(val.biayaSewa) + "</td><td>" + rupiah(val.subBiayaSewa) + "</td></tr>";
                });
                $("#myTable tbody").html(rows);
              },
              error: function() {
                  alert("Error occured!!")
              }
          });

        });

        $('#datatable1').on('click', '.acc', function (e) { 
          e.preventDefault();
          var sewaid = $(this).attr('data-id');
          $.ajax({
              type: "GET",
              url: "{{url('/admin/transaksi/pengembalian/acc')}}" + "/" + sewaid,
              dataType: "json",
              beforeSend: function(){
                Swal.fire(
                      'Succes!',
                      'Your file has been acc.',
                      'success'
                    )
              },
              success: function (data) {
                if (data.msg == 1) {
                  $('#modaldemo2').modal('hide');
                  bTable.ajax.reload();
                  
                  Swal.fire({
                    title: 'Apakah ingin mencetak Nota Pembayaran?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, print it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      $.ajax({
                        type: "GET",
                        url: "{{url('/admin/transaksi/pengembalian/cetaknota')}}" + "/" + sewaid,
                        contentType: false,
                        processData: false,
                        //xhrFields is what did the trick to read the blob to pdf
                        xhrFields: {
                            responseType: 'blob'
                        },
                        beforeSend: function(){
                          Swal.fire({
                            html: '<br><br><i class="fa fa-circle-o-notch fa-spin" style="font-size:100px"></i><br><br>',
                            showConfirmButton: false
                          })       
                        },
                        complete: function(){
                          Swal.close();
                        },
                        success: function (response, status, xhr) {
                            var filename = "";                   
                            var disposition = xhr.getResponseHeader('Content-Disposition');

                            if (disposition) {
                                var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                                var matches = filenameRegex.exec(disposition);
                                if (matches !== null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                            } 
                            var linkelem = document.createElement('a');
                            try {
                                var blob = new Blob([response], { type: 'application/octet-stream' });                        

                                if (typeof window.navigator.msSaveBlob !== 'undefined') {
                                    //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                    window.navigator.msSaveBlob(blob, filename);
                                } else {
                                    var URL = window.URL || window.webkitURL;
                                    var downloadUrl = URL.createObjectURL(blob);

                                    if (filename) { 
                                        // use HTML5 a[download] attribute to specify filename
                                        var a = document.createElement("a");

                                        // safari doesn't support this yet
                                        if (typeof a.download === 'undefined') {
                                            window.location = downloadUrl;
                                        } else {
                                            a.href = downloadUrl;
                                            a.download = filename;
                                            document.body.appendChild(a);
                                            a.target = "_blank";
                                            a.click();
                                        }
                                    } else {
                                        window.location = downloadUrl;
                                    }
                                }   

                            } catch (ex) {
                                console.log(ex);
                            } 
                          }
                      });
                    }
                  })                  
                } else {
                  Swal.fire({
                      icon: 'error',
                      title: 'Oops...',
                      text: 'Something went wrong!'
                  })
                }
              },
              error: function() {
                  alert("Error occured!!")
              }
            });
          });

        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
@endsection