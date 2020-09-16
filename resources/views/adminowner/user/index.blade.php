@extends('adminowner.layouts.admin_layout')

@section('admin_content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.index') }}">Dashboard</a>
        <span class="breadcrumb-item active">Data User</span>
      </nav>
        
      <div class="sl-pagebody">
      <div class="row">
          <div class="col-sm-3 col-md-9">
            <div class="sl-page-title">
              <h5>Data User</h5>
                <p>Halaman Pengolahan Data User</p>
            </div>
            </div>
            <div class="col-sm-3 col-md-3 mg-t-20 mg-md-t-0">
              <button class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#modaldemo3"><i class="fa fa-plus mg-r-10"></i> Tambah User</button>
            </div><!-- col-sm -->
          </div>
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table table-hover table-bordered" style="width:100%">
              <thead class="bg-info">
                <tr>
                  <th class="wd-15p">Avatar</th>
                  <th>Nama</th>
                  <th class="wd-20p">Email</th>
                  <th class="wd-35p">Alamat</th>
                  <th>No HP</th>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Tambah User</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body pd-20">
            <form id="TambahForm" enctype="multipart/form-data">
                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="nama" id="nama" placeholder="Nama" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" id="gbr">Avatar : <span class="tx-danger">*</span></label><br>
                        <label class="custom-file col-lg-6">
                          <input type="file" name="avatar" id="file1" class="custom-file-input" accept="image/*" required>
                          <span class="custom-file-control custom-file-control-primary"></span>
                        </label>
                      </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="nohp" id="nohp" placeholder="Nomer HP" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Password: <span class="tx-danger">*</span> 8 characters minimum</label>
                        <input class="form-control" type="password" pattern=".{8,}" title="8 characters minimum" name="pass" id="pass" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                        <textarea rows="4" class="form-control" name="alamat" id="alamat" placeholder="Alamat Lengkap"></textarea>
                      </div>
                    </div><!-- col-8 -->
                    
                  </div><!-- row -->
                </div>
              </div><!-- modal-body -->
            <div class="modal-footer">
              <button type="submit" class="btn btn-info pd-x-20" id="tambahuser">Save changes</button>
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
                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit User</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body pd-20">
            <form id="EditForm" enctype="multipart/form-data">
              <div class="form-layout">
                <div class="row mg-b-25">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <input class="form-control" type="hidden" name="iduser" id="iduser" placeholder="Nama" required>
                        <label class="form-control-label">Nama: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="namaed" id="namaed" placeholder="Nama" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="emailed" name="emailed" id="emailed" placeholder="Email" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" id="gbr1">Avatar: <span class="tx-danger">*</span></label><br>
                        <label class="custom-file col-lg-6">
                          <input type="file" name="avatared" id="file2" class="custom-file-input" accept="image/*" >
                          <span class="custom-file-control custom-file-control-primary"></span>
                        </label>
                      </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="nohped" id="nohped" placeholder="Nomer HP" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Password: 8 characters minimum</label>
                        <input class="form-control" type="password" pattern=".{8,}" title="8 characters minimum" name="passed" id="passed" placeholder="Kosongi Jika Tidak Diganti">
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                        <textarea rows="4" class="form-control" name="alamated" id="alamated" placeholder="Alamat Lengkap"></textarea>
                      </div>
                    </div><!-- col-8 -->
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
        $('#pelanggan').addClass('active');

        $('#file1').change(function(e){
            var fileName = e.target.files[0].name;
            $('#gbr').html(' ' + fileName);
        });

        $('#file2').change(function(e){
            var fileName = e.target.files[0].name;
            $('#gbr1').html(' ' + fileName);
        });

        var bTable = $('#datatable1').DataTable({
          processing: true,
          serverSide: true,
          ajax: "/admin/user/serverside",
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            processing: '<br><br><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Loading...</span>',
          },
          fixedColumns: {
            heightMatch: 'none'
          },
          columns: 
          [
            {
              "name": "avatar",
              "data": "avatar",
              "render": function (data, type, full, meta) {
                  return "<img src=\"" + "../" + data + "\" height=\"100\"/>";
              },
              "title": "Avatar",
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
              "data": 'email',
              "name": 'email',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'address',
              "name": 'address',
              "orderable": true,
              "searchable": true,
              "contentPadding": "iii"
            },
            {
              "data": 'nohp',
              "name": 'nohp',
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
          var usrid = $(this).attr('data-id');
          $.ajax({
              type: "GET",
              url: "{{url('/admin/user/edit')}}" + "/" + usrid,
              dataType: "json",
              success: function (data) {
                  $('#iduser').val(usrid);
                  $('#namaed').val(data[0].name);
                  $('#emailed').val(data[0].email);
                  $('#alamated').val(data[0].address);
                  $('#nohped').val(data[0].nohp);
                  $('#gbr1').html(data[0].avatar.substr(18));
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
                url: "{{url('/admin/user/tambah')}}",
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
                url: "{{url('/admin/user/update')}}",
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
          var usrid = $(this).attr('data-id');
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
                    url: "{{url('/admin/user/delete')}}" + "/" + usrid,
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
    
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
@endsection