@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="single_product">
  <div class="container">
    <div class="row">

      <!-- Images -->
      <div class="col-lg-2 order-lg-1 order-2">
        <ul class="image_list">
          <li data-image="{{ asset('frontend-theme/images/single_4.jpg') }}"><img src="{{ asset('frontend-theme/images/single_4.jpg') }}" alt=""></li>
          <li data-image="{{ asset('frontend-theme/images/single_2.jpg') }}"><img src="{{ asset('frontend-theme/images/single_2.jpg') }}" alt=""></li>
          <li data-image="{{ asset('frontend-theme/images/single_3.jpg') }}"><img src="{{ asset('frontend-theme/images/single_3.jpg') }}" alt=""></li>
        </ul>
      </div>

      <!-- Selected Image -->
      <div class="col-lg-5 order-lg-2 order-1">
        <div class="image_selected"><img src="{{ asset($product->image) }}" alt=""></div>
      </div>

      <!-- Description -->
      <div class="col-lg-5 order-3">
        <div class="product_description">
          <div class="product_category"><h5>{{ $product->category_name }}</h5></div>
          <div class="product_name">{{ $product->product_name }}</div>
          @if($product->jenis)
            <div class="product_jenis">
              <h4 class="badge progress-bar-success">
                {{ $product->jenis }}
              </h4>
            </div>
          @endif
          <div class="product_text"><p>{{ $product->product_detail }}</p></div>
          <div class="row">
            <div class="col-4">
              <div class="product_text" >
                <label>Kualitas: </label>
                <span class="badge progress-bar-success">Baru</span>
              </div>
            </div>
            <div class="col-6">
              <div class="product_text" >
                <label>Stok Barang: </label>
                <span class="badge progress-bar-success">{{ $product->product_quantity }} Barang</span>
              </div>
            </div>
            <div class="col-2">
            </div>
          </div>
          <div class="order_info d-flex flex-row" style="margin-top: 20px">
            <form action="#">
              <div class="row mt-4">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Tanggal Sewa</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="datetimepickerSewa">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Tanggal Pengembalian</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="datetimepickerPengembalian">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-2">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Jam Sewa</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="jamSewa">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="">Jam Pengembalian</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="jamPengembalian">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row mt-2" >
                  <div class="col-6">
                    <label for="">Lama Sewa</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="lama" >
                      <span class="input-group-addon" >
                        <span class="glyphicon glyphicon-time"></span>
                      </span>
                    </div>
                  </div>
                  <div class="col-6">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Quantity</label>
                        <input type="number" class="form-control" min="1" max="{{ $product->product_quantity }}" pattern="[0-9]" name="qty" value="1">
                      </div>
                  </div>
                </div>
              </div>

              <div class="product_price" style="margin-top: 35px">Rp.{{ $product->price }} / Hari</div>
              <div class="button_container">
                <button type="button" class="button cart_button">Add to Cart</button>
                <div class="product_fav"><i class="fas fa-heart"></i></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel"></div>
@include('layouts.footer')
@endsection
