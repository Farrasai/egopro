@extends('adminowner.layouts.admin_layout')

@section('admin_content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.index') }}">Dashboard</a>
        <span class="breadcrumb-item active">Data Barang</span>
      </nav>
        
      <div class="sl-pagebody">
      <div class="row">
          <div class="col-sm-3 col-md-9">
            <div class="sl-page-title">
              <h5>Data Barang</h5>
                <p>Halaman Data Barang</p>
            </div>
            </div>
            <div class="col-sm-3 col-md-3 mg-t-20 mg-md-t-0">
              <button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#modaldemo3"><i class="fa fa-plus mg-r-10"></i> Tambah Barang</button>
            </div><!-- col-sm -->
          </div>
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table table-hover table-bordered nowrap" style="width:100%">
              <thead class="bg-info">
                <tr>
                  <th class="wd-15p">Barang</th>
                  <th class="wd-15p">Kode Barang</th>
                  <th class="wd-20p">Nama Barang</th>
                  <th class="wd-15p">Jenis</th>
                  <th class="wd-10p">Harga</th>
                  <th class="wd-25p">Stock</th>
                  <th class="wd-25p">Aksi</th>
                </tr>
              </thead>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
        <div id="modaldemo3" class="modal fade" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah Barang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body pd-20">
              <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="barang" placeholder="Nama Barang">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Jenis: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="jenis"  placeholder="Jenis">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Kode: <span class="tx-danger">*</span></label>
                  <input class="form-control" disabled type="text" name="kode" value="{{ $unikode }}" placeholder="Kode">
                </div>
              </div>
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="harga"  placeholder="Harga">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Stock: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" name="stock"  placeholder="Stock">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" id="gbr1">Gambar: <span class="tx-danger">*</span></label>
                  <label class="custom-file">
                    <input type="file" id="file1" class="custom-file-input" accept="image/*">
                    <span class="custom-file-control custom-file-control-primary"></span>
                  </label>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
                  <textarea rows="4" class="form-control" placeholder="Keterangan"></textarea>
                </div>
              </div><!-- col-8 -->
              
            </div><!-- row -->
          </div>
            </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info pd-x-20">Save changes</button>
              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div><!-- modal-dialog -->
      </div>
      <div id="modaldemo2" class="modal fade" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
              <div class="modal-header pd-x-20">
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Barang</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body pd-20">
              <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="baranged" name="barang" placeholder="Nama Barang">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Jenis: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="jenised" name="jenis"  placeholder="Jenis">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Kode: <span class="tx-danger">*</span></label>
                  <input class="form-control" disabled type="text" id="kodeed" name="kode"  placeholder="Kode">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" id="hargaed" name="harga"  placeholder="Harga">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Stock: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="number" id="stocked" name="stock"  placeholder="Stock">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label" id="gbr">Gambar: <span class="tx-danger">*</span></label>
                  <label class="custom-file">
                    <input type="file" id="file2" class="custom-file-input" accept="image/*">
                    <span class="custom-file-control custom-file-control-primary"></span>
                  </label>
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-12">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
                  <textarea rows="4" class="form-control" id="keteranganed" placeholder="Keterangan"></textarea>
                </div>
              </div><!-- col-8 -->
              
            </div><!-- row -->
          </div>
            </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-info pd-x-20">Save changes</button>
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

        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('#gbr1').html(' ' + fileName);
            $('#gbr').html(' ' + fileName);
        });

        $('#datatable1').DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          ajax: "/admin/product/serverside",
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
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
                console.log(data[0]);
                  $('#baranged').val(data[0].product_name);
                  $('#jenised').val(data[0].jenis);
                  $('#kodeed').val(data[0].kode_barang);
                  $('#hargaed').val(data[0].price);
                  $('#stocked').val(data[0].product_quantity);
                  $('#gbr').html(data[0].image.substr(16));
                  $('#keteranganed').val(data[0].product_detail);
              },
              error: function() {
                  alert("Error occured!!")
              }
          });
        });

        $('#datatable1').on('click', '.del', function (e) { 
          e.preventDefault();
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
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
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