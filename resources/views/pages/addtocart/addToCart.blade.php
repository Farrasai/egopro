@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="cart_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="cart_container">
          <div class="cart_title">Shopping Cart</div>
          <div class="cart_items">
            <ul class="cart_list">    
              <li class="cart_item clearfix">
                <div class="cart_item_image text-center"><br><br><img src="{{ asset('frontend-theme/images/single_4.jpg') }}" alt="" style="width:70px;"></div>
                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                  <div class="cart_item_name cart_info_col">
                    <div class="cart_item_title text-center">Nama</div>
                    <div class="cart_item_text">Laptop</div>
                  </div>

                  <div class="cart_item_quantity cart_info_col">
                    <div class="cart_item_title text-center">Quantity</div>
                    <form action="" method="POST">@csrf
                      <input type="hidden" name="productId" value="">
                      <input class="form-control" type="number" name="qty" value="3" style="width: 70px; margin-top:30px; display:inline">
                    </form>
                  </div>

                  <div class="cart_item_price cart_info_col">
                    <div class="cart_item_title text-center">Harga/Hari</div>
                    <div class="cart_item_text">Rp.350.000</div>
                  </div>

                  <div class="cart_item_quantity cart_info_col">
                    <div class="cart_item_title text-center">Tanggal Sewa</div>
                    <form action="" method="POST">@csrf
                      <div class="input-group">
                        <input type="text" class="form-control" id="datetimepickerSewa" style="width: 120px; margin-top:30px; display:inline; border-radius:5px">
                      </div>
                    </form>
                  </div>

                  <div class="cart_item_quantity cart_info_col">
                    <div class="cart_item_title text-center">Tanggal Pengembalian</div>
                    <form action="" method="POST">@csrf
                      <div class="input-group">
                        <input type="text" class="form-control" id="datetimepickerPengembalian" style="width: 120px; margin-top:30px; display:inline;border-radius:5px">
                      </div>
                    </form>
                  </div>

                  <div class="cart_item_total cart_info_col">
                    <div class="cart_item_title text-center">Total</div>
                    <div class="cart_item_text">Rp.350.000</div>
                  </div>
                  <div class="cart_item_total cart_info_col">
                    <div class="cart_item_title text-center">Action</div>
                    {{-- <a href="" class="btn btn-sm btn-danger" style="margin-top: 30px">x</a> --}}
                    <button type="submit" class="btn btn-danger btn-md" style="margin-top:30px; display:inline;">x</button>
                    <button type="submit" class="btn btn-success btn-md" style="margin-top:30px; display:inline;"><i class="fas fa-check-square"></i></button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          
          <!-- Order Total -->
          <div class="order_total">
            <div class="order_total_content text-md-right">
              <div class="order_total_title">Order Total:</div>
              <div class="order_total_amount">Rp. 350.000</div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="list-form" style="color:rgba(0,0,0,0.5)">
                <div class="card mt-3">
                  <div class="card-header text-center">
                    Form Penyewaan
                  </div> 
                  <div class="card-body" >
                    <div class="form-group row" >
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" value={{ Auth::user()->name }}>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" value={{ Auth::user()->email }}>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" value={{ Auth::user()->address }}>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">No HP</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3"value={{ Auth::user()->nohp }}>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4 col-sm-12">
              <div class="cart_buttons">
                <button type="button" class="button cart_button_clear">All Cancel</button>
                <a href="" class="button cart_button_checkout">Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel"></div>
@include('layouts.footer')
@endsection