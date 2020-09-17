@extends('adminowner.layouts.admin_layout')

@section('admin_content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.index') }}">Dashboard</a>
        <a class="breadcrumb-item" href="#">Transaksi</a>
        <span class="breadcrumb-item active">Data Pengambilan</span>
      </nav>
        
      <div class="sl-pagebody">
      <div class="row">
          <div class="col-sm-3 col-md-9">
            <div class="sl-page-title">
              <h5>Data Pengambilan</h5>
                <p>Halaman Data Pengambilan Barang</p>
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
                  <th>No HP</th>
                  <th>Jam Ambil</th>
                  <th>Tanggal Ambil</th>
                  <th>Tanggal Kembali</th>
                  <th>Aksi</th>
                </tr>
              </thead>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      <div id="modaldemo2" class="modal fade" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Detail Pengambilan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pd-25">
                <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
                <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20">Save changes</button>
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
        $('#barang').addClass('active');

        $.ajax({
            url: "{{url('/admin/product/category')}}",
            dataType: 'json',
            success: function (datas) {
                var barang = $.map(datas, function (obj) {
                    obj.id = obj.id || obj.id; // replace id_kab with your identifier
                    obj.text = obj.text || obj.category_name;// replace nama with your identifier
                    return obj;
                });
                $('#selectkategori').empty();
                $('#selectkategoried').empty();
                  $.each(barang, function(i, p) {
                  $('#selectkategori').append($('<option></option>').val(p.id).html(p.category_name));
                  $('#selectkategoried').append($('<option></option>').val(p.id).html(p.category_name));
                });
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert("error");
            }
        });

        $('#file1').change(function(e){
            var fileName = e.target.files[0].name;
            $('#gbr1').html(' ' + fileName);
        });

        $('#file2').change(function(e){
            var fileName = e.target.files[0].name;
            $('#gbr2').html(' ' + fileName);
        });

        var bTable = $('#datatable1').DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          ajax: "/admin/product/serverside",
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            processing: '<br><br><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Loading...</span>',
          },
          columns: 
          [
            {
              "name": "image",
              "data": "image",
              "render": function (data, type, full, meta) {
                  return "<img src=\"" + "../" + data + "\" height=\"100\"/>";
              },
              "title": "Image",
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'kode_barang',
              "name": 'kode_barang',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'product_name',
              "name": 'product_name',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'jenis',
              "name": 'jenis',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'price',
              "name": 'price',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'product_quantity',
              "name": 'product_quantity',
              "orderable": true,
              "searchable": true
            },
            {
              data: 'action',
              name: 'action'
            }
          ]
        });

        $('#datatable1').on('click', '.edit', function (e) { 
          e.preventDefault();
          $('#modaldemo2').modal('show');
          var brgid = $(this).attr('data-id');
          $.ajax({
              type: "GET",
              url: "{{url('/admin/product/edit')}}" + "/" + brgid,
              dataType: "json",
              success: function (data) {
                  $('#barangid').val(brgid);
                  $('#baranged').val(data[0].product_name);
                  $('#jenised').val(data[0].jenis);
                  $('#kodeed').val(data[0].kode_barang);
                  $('#hargaed').val(data[0].price);
                  $('#stocked').val(data[0].product_quantity);
                  $('#selectkategoried').val(data[0].category_id);
                  $('#kualitased').val(data[0].quality);
                  $('#gbr').html(data[0].image.substr(16));
                  $('#keteranganed').val(data[0].product_detail);
              },
              error: function() {
                  alert("Error occured!!")
              }
          });

          
        });

        $("#TambahForm").submit(function(e) {
            e.preventDefault();    
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{url('/admin/product/tambah')}}",
                data: formData,
                success: function (data) {
                  if (data.msg == 1) {
                          Swal.fire(
                          'Sukses!',
                          'Data berhasil disimpan',
                          'success'
                        )
                        $('#modaldemo3').modal('hide');
                        bTable.ajax.reload();
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
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });
          
        $("#EditForm").submit(function(e) {
            e.preventDefault();    
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "{{url('/admin/product/update')}}",
                data: formData,
                success: function (data) {
                  if (data.msg == 1) {
                          Swal.fire(
                          'Sukses!',
                          'Data berhasil di edit',
                          'success'
                        )
                        $('#modaldemo2').modal('hide');
                        bTable.ajax.reload();
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
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

        $('#datatable1').on('click', '.del', function (e) { 
          e.preventDefault();
          var brgid = $(this).attr('data-id');
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                  type: "GET",
                    url: "{{url('/admin/product/delete')}}" + "/" + brgid,
                    dataType: "json",
                    success: function(data) {
                        if (data.msg == '1') {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            bTable.ajax.reload();
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
                })
            }
          })
        });
        
        

        $('#datatable2').DataTable({
          bLengthChange: false,
          searching: false,
          responsive: true
        });

        // Select2


        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
@endsection