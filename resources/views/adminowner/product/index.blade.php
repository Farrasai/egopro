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
                  <th>Barang</th>
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Stock</th>
                  <th>Aksi</th>
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
            <form id="TambahForm" enctype="multipart/form-data">
                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="barang" id="barang" placeholder="Nama Barang" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Jenis: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="jenis" id="jenis" placeholder="Jenis" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Kode: <span class="tx-danger">*</span></label>
                        <input class="form-control" readonly type="text" name="kode" id="kode" value="{{ $unikode }}" placeholder="Kode" required>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="harga" id="harga" placeholder="Harga" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Stock: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="stock" id="stock" placeholder="Stock" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" id="gbr1">Gambar: <span class="tx-danger">*</span></label>
                        <label class="custom-file">
                          <input type="file" name="gambar" id="file1" class="custom-file-input" accept="image/*" required>
                          <span class="custom-file-control custom-file-control-primary"></span>
                        </label>
                      </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
                        <select name="kategori" class="form-control select2" id="selectkategori" data-placeholder="Choose Barang" required>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kualitas: <span class="tx-danger">*</span></label>
                        <select name="kualitas" class="form-control select2" id="kualitas" data-placeholder="Choose Barang" required>
                          <option value="Baru">Baru</option>
                          <option value="Bekas">Bekas</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
                        <textarea rows="4" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"></textarea>
                      </div>
                    </div><!-- col-8 -->
                    
                  </div><!-- row -->
                </div>
              </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-info pd-x-20" id="tambahbarang">Save changes</button>
              <button type="button" class="btn btn-secondary pd-x-20" id="closemodal" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
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
            <form id="EditForm" enctype="multipart/form-data">
              <div class="form-layout">
                <div class="row mg-b-25">
                  <div class="col-lg-4">
                    <div class="form-group">
                    <input class="form-control" type="hidden" id="barangid" name="barangid" placeholder="Nama Barang">
                      <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" id="baranged" name="baranged" placeholder="Nama Barang">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Jenis: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="text" id="jenised" name="jenised"  placeholder="Jenis">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Kode: <span class="tx-danger">*</span></label>
                      <input class="form-control" readonly type="text" id="kodeed" name="kodeed"  placeholder="Kode">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Harga: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" id="hargaed" name="hargaed"  placeholder="Harga">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label">Stock: <span class="tx-danger">*</span></label>
                      <input class="form-control" type="number" id="stocked" name="stocked"  placeholder="Stock">
                    </div>
                  </div><!-- col-4 -->
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" id="gbr2">Gambar: </span></label>
                      <label class="custom-file">
                        <input name="gambared" type="file" id="file2" class="custom-file-input" accept="image/*">
                        <span class="custom-file-control custom-file-control-primary"></span>
                      </label>
                    </div>
                  </div><!-- col-8 -->
                  <div class="col-lg-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kategori: <span class="tx-danger">*</span></label>
                        <select name="kategoried" class="form-control select2" id="selectkategoried" data-placeholder="Choose Barang" required>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Kualitas: <span class="tx-danger">*</span></label>
                        <select name="kualitased" class="form-control select2" id="kualitased" data-placeholder="Choose Barang" required>
                          <option value="Baru">Baru</option>
                          <option value="Bekas">Bekas</option>
                        </select>
                      </div>
                    </div>
                  <div class="col-lg-12">
                    <div class="form-group mg-b-10-force">
                      <label class="form-control-label">Keterangan: <span class="tx-danger">*</span></label>
                      <textarea rows="4" class="form-control" id="keteranganed" name="keteranganed" placeholder="Keterangan"></textarea>
                    </div>
                  </div>    
                </div><!-- row -->
              </div>
                </div><!-- modal-body -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20">Save changes</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
              </div>
          </form>
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