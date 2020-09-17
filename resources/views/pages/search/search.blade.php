@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="home">
  <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
  <div class="home_overlay"></div>
  <div class="home_content d-flex flex-column align-items-center justify-content-center">
    <h2 class="home_title">Search Products</h2>
  </div>
</div>

<!-- Shop -->

<div class="shop">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">

        <!-- Shop Sidebar -->
        <div class="shop_sidebar">
          <div class="sidebar_section">
            <div class="sidebar_title">Categories</div>
            <ul class="sidebar_categories">
              @foreach ($categories as $category)
              <li><a href="{{ url('products/'.$category->id) }}">{{ $category->category_name }}</a></li>
              @endforeach
          </div>
        </div>

      </div>

      <div class="col-lg-9">
        
        <!-- Shop Content -->
        <div class="shop_content">
          <div class="shop_bar clearfix">
            <div class="shop_product_count"><span>{{ count($products) }}</span> products found</div>
          </div>

          <div class="product_grid">
            <div class="product_grid_border"></div>
            
            <!-- Product Item -->
            @if(count($products) > 0)
            @foreach ($products as $product)  
            <div class="product_item">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset($product->image) }} " style="height: 100px; widht:100px;"  alt=""></div>
              <div class="product_content">
                <div class="product_price text-danger font-weight-bold">{{ rupiah($product->price) }}</div>
                <div class="product_name" style="margin-top: -10px"><div><a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}" tabindex="0">{{ $product->product_name }}</a></div></div>
              </div>
            </div>
            @endforeach
            @else
            <div class="mt-5">
              <h3>Product yang anda cari tidak ditemukan</h3>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel"></div>
@include('layouts.footer')
@endsection