@extends('adminowner.layouts.admin_layout')

@section('admin_content')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.index') }}">Dashboard</a>
        <span class="breadcrumb-item active">Laporan</span>
      </nav>
        
      <div class="sl-pagebody">
      <div class="row">
          <div class="col-sm-3 col-md-6"> 
            <div class="sl-page-title">
              <h5>Data Laporan</h5>
                <p>Halaman Data Laporan Barang</p>
            </div>
            </div>
            <div class="col-sm-3 col-md-3 mg-t-10 mg-md-t-10">
              <button class="btn btn-outline-success btn-block"><i class="fa fa-book mg-r-10"></i> Cetak Excel</button>
            </div><!-- col-sm -->
            <div class="col-sm-3 col-md-3 mg-t-10 mg-md-t-10">
              <button class="btn btn-outline-warning btn-block"><i class="fa fa-print mg-r-10"></i> Cetak PDF</button>
            </div><!-- col-sm -->
          </div>
        <div class="card pd-20 pd-sm-40">
          <div class="table-wrapper">
            <table id="datatable1" class="table table-hover table-bordered nowrap" style="width:100%">
              <thead class="bg-info">
                <tr>
                  <th>No</th>
                  <th>Tanggal Sewa</th>
                  <th>Nama Penyewa</th>
                  <th>Barang</th>
                  <th>Jumlah Sewa</th>
                  <th>Biaya Sewa</th>
                  <th>Denda</th>
                </tr>
              </thead>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
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
        $('#laporan').addClass('active');

        function rupiah(angka){
          var rupiah = '';		
          var angkarev = angka.toString().split('').reverse().join('');
          for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
          return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
        }

        var start = moment().subtract(29, 'days');
        var end = moment();

        var bTable = $('#datatable1').DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          dom: "<'row'<'col-sm-6'l><'col-sm-3' <'datesearchbox'>><'col-sm-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
          ajax: {
              "url": "/admin/laporan/serverside/" + start.format('YYYY-MM-DD') + "/" + end.format('YYYY-MM-DD'),
              "type": "POST",
              "datatype": "json",
          },
          language: {
            searchPlaceholder: 'Search...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span>Loading...</span>',
          },
          columns: 
          [
            {
              "data": 'DT_RowIndex',
              "orderable": false, 
              "searchable": false
            },
            {
              "data": 'tanggalSewa',
              "name": 'tanggalSewa',
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
              "data": 'namaProduct',
              "name": 'namaProduct',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'quantity',
              "name": 'quantity',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'biayaSewa',
              "name": 'biayaSewa',
              "orderable": true,
              "searchable": true
            },
            {
              "data": 'denda',
              "name": 'denda',
              "orderable": true,
              "searchable": true
            }
          ]
        });

        $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-addon"> <i class="fa fa-calendar"></i> </div><input type="text" class="form-control pull-right" id="datesearch" name="daterange" placeholder="Search by date range.."> </div>');

        //menangani proses saat apply date range
        function cb(startA, endA) {
            $('#datesearch span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            if (start.valueOf() != startA.valueOf() || end.valueOf() != endA.valueOf()) {
                start = startA;
                end = endA;
                var urldata = "/admin/laporan/serverside/" + startA.format('YYYY-MM-DD') + "/" + endA.format('YYYY-MM-DD');
                // $(".excel").attr("href", 'DownloadExcel/?dateFrom=' + startA.format('YYYY-MM-DD') + '&dateTo=' + endA.format('YYYY-MM-DD'));
                // $(".pdf").attr("href", 'PrintPDF/?dateFrom=' + startA.format('YYYY-MM-DD') + '&dateTo=' + endA.format('YYYY-MM-DD'));
                bTable.ajax.url(urldata).load();
            }
        }

        $('input[name="daterange"]').daterangepicker({
            startDate: start,
            endDate: end,
            opens: 'left',
            ranges: {
                Today: [moment(), moment()],
                Yesterday: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            buttonClasses: 'btn btn-sm mx-1',
            applyButtonClasses: 'btn-primary',
            cancelClass: 'btn-secondary',
        }, cb);

        cb(start, end);

        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
@endsection