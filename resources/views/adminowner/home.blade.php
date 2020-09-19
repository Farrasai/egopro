@extends('adminowner.layouts.admin_layout')

@section('admin_content')
@php
    $totalProdukKamera = DB::table('products')->where('category_id',1)->count();
    $totalStokKamera = DB::table('products')->where('category_id',1)->sum('product_quantity');

    $totalProdukAudio = DB::table('products')->where('category_id',2)->count();
    $totalStokAudio = DB::table('products')->where('category_id',2)->sum('product_quantity');

    $totalProdukEquipment = DB::table('products')->where('category_id',3)->count();
    $totalStokEquipment = DB::table('products')->where('category_id',3)->sum('product_quantity');

    $totalProdukLensa = DB::table('products')->where('category_id',4)->count();
    $totalStokLensa = DB::table('products')->where('category_id',4)->sum('product_quantity');

    $totalProdukLighting = DB::table('products')->where('category_id',5)->count();
    $totalStokLighting = DB::table('products')->where('category_id',5)->sum('product_quantity');

    $totalPengguna = DB::table('users')->whereNotNull('email_verified_at')->count();
    $totalTransaksi = DB::table('sewa')->where('status', 2)->count();
@endphp
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="row row-sm">  
      <div class="col-sm-6 col-xl-6">
        <div class="card pd-20 bg-info">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Pengguna</h6>
            <a href="" class="tx-white-8 hover-white">Pengguna yang telah verifikasi</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalPengguna }} Pengguna</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
        
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->
      <div class="col-sm-6 col-xl-6">
        <div class="card pd-20 bg-info">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Transaksi</h6>
            <a href="" class="tx-white-8 hover-white">Transaksi Tertangani</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalTransaksi }} Transaksi</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->
    </div><!-- row -->
  </div><!-- sl-pagebody -->

  <div class="sl-pagebody">
    <div class="row row-sm">  
      <div class="col-sm-6 col-xl-4">
        <div class="card pd-20 bg-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Barang</h6>
            <a href="" class="tx-white-8 hover-white">Kamera</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalProdukKamera }} Barang</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            {{-- <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">$2,210</h6>
            </div> --}}
            <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">{{ $totalStokKamera }} kamera</h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->

      <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
        <div class="card pd-20 bg-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Barang</h6>
            <a href="" class="tx-white-8 hover-white">Audio</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalProdukAudio }} Barang</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">{{ $totalStokAudio }} audio</h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->

      <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
        <div class="card pd-20 bg-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Barang</h6>
            <a href="" class="tx-white-8 hover-white">Equipment</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalProdukEquipment }} Barang</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">{{ $totalStokAudio }} equipment</h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->

      {{-- <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
        <div class="card pd-20 bg-sl-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Gross Sales</span>
              <h6 class="tx-white mg-b-0">$2,210</h6>
            </div>
            <div>
              <span class="tx-11 tx-white-6">Tax Return</span>
              <h6 class="tx-white mg-b-0">$320</h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 --> --}}
    </div><!-- row -->
  </div><!-- sl-pagebody -->

  <div class="sl-pagebody">
    <div class="row row-sm">  
      <div class="col-sm-6 col-xl-4">
        <div class="card pd-20 bg-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Barang</h6>
            <a href="" class="tx-white-8 hover-white">Lensa</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalProdukLensa }} Barang</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            {{-- <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">$2,210</h6>
            </div> --}}
            <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">{{ $totalStokLensa }} lensa</h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->

      <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
        <div class="card pd-20 bg-primary">
          <div class="d-flex justify-content-between align-items-center mg-b-10">
            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Barang</h6>
            <a href="" class="tx-white-8 hover-white">Lighting</a>
          </div><!-- card-header -->
          <div class="d-flex align-items-center justify-content-between">
            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
            <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalProdukLighting }} Barang</h3>
          </div><!-- card-body -->
          <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
            <div>
              <span class="tx-11 tx-white-6">Stok Tersedia</span>
              <h6 class="tx-white mg-b-0">{{ $totalStokLighting }} lighting</h6>
            </div>
          </div><!-- -->
        </div><!-- card -->
      </div><!-- col-3 -->

      

    </div><!-- row -->
  </div><!-- sl-pagebody -->
<!-- ########## END: MAIN PANEL ########## -->
</div>

@endsection