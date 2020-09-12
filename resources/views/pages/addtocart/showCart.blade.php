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
            @if(Cart::instance(Auth::id())->count() === 0)
              <h4 style="text-align: center; margin: 50px; ">Cart kosong, silahkan pilih barang yang ingin di sewa</h4>
            @else
              
            @foreach($carts as $cart)    
              <li class="cart_item clearfix">
                <div class="cart_item_image text-center"><br><br><img src="{{ asset($cart->options->image) }}" alt="" style="width:70px; margin-top: 15px"></div>
                <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                  <div class="cart_item_name cart_info_col" style="margin-left: 0px">
                    <div class="cart_item_title text-center">Nama Product</div>
                    <div class="cart_item_text"><h5>{{ $cart->name }}</h5></div>
                  </div>

                @if($cart->options->jenis)
                 <div class="cart_item_name cart_info_col" style="margin-left: 0px">
                  <div class="cart_item_title text-center">Jenis/Tipe</div>
                  <div class="cart_item_text"><h5>{{ $cart->options->jenis }}</h5></div>
                </div>
                @endif

                  <div class="cart_item_price cart_info_col">
                    <div class="cart_item_title text-center">Harga/Hari</div>
                    <div class="cart_item_text"><h5>{{rupiah($cart->price)}}</h5></div>
                  </div>
                  

                  <div class="cart_item_quantity cart_info_col">
                    <form action="{{ route('update.cart') }}" method="POST">@csrf
                    <div class="cart_item_title text-center">Quantity </div>
                      <div class="input-group">
                        <input type="hidden" name="productId" value="{{ $cart->rowId }}"> 

                        <input class="form-control" type="number" min="1" max="{{ $cart->options->maxQty }}" name="qty" value="{{ $cart->qty }}" style="width: 70px; margin-top:30px;  margin-right: 5px; border-radius:4px;">
                        
                        
                        <button type="submit" class="btn btn-success btn-md" style="margin-top: 30px; margin-left: 5px;"><i class="fas fa-check-square"></i></button>
                      </div>
                    </form>
                      
                  </div>

                  <div class="cart_item_total cart_info_col">
                    <div class="cart_item_title text-center">Total</div>
                    <div class="cart_item_text"><h5>{{ rupiah($cart->price * $cart->qty )}}</h5></div>
                  </div>

                  <div class="cart_item_total cart_info_col">
                    <div class="cart_item_title text-center"></div>
                    {{-- <a href="" class="btn btn-sm btn-danger" style="margin-top: 30px">x</a> --}}

                    <form action="{{ url('remove/cart/'.$cart->rowId) }}">
                      <button type="submit" class="btn btn-danger btn-md" style="margin-top:50px;">x</button>
                    </form>
                  </div>
                </div>
              </li>
            @endforeach
       
            </ul>
          </div>
      
      
          <!-- Order Total -->
          <div class="order_total">
            <div class="order_total_content text-md-right">
              <div class="order_total_title">Order Total:</div>
              <div class="order_total_amount">Rp.{{Cart::total()}}</div>
            </div>
          </div>
          <div class="checkout">
            <div class="cart_buttons">
                <a href="{{ route('all.product') }}" class="button cart_button_clear">Tambah Product</a>
                <a href="{{ route('checkout') }}" class="button cart_button_checkout">Checkout</a>
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
<div class="panel"></div>
@include('layouts.footer')




@endsection