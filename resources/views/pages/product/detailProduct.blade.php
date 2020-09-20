@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="single_product">
  <div class="container">
    <div class="row">

      {{-- <!-- Images -->
      <div class="col-lg-2 order-lg-1 order-2">
        <ul class="image_list">
          <li data-image="{{ asset('frontend-theme/images/single_4.jpg') }}"><img src="{{ asset('frontend-theme/images/single_4.jpg') }}" alt=""></li>
          <li data-image="{{ asset('frontend-theme/images/single_2.jpg') }}"><img src="{{ asset('frontend-theme/images/single_2.jpg') }}" alt=""></li>
          <li data-image="{{ asset('frontend-theme/images/single_3.jpg') }}"><img src="{{ asset('frontend-theme/images/single_3.jpg') }}" alt=""></li>
        </ul>
      </div> --}}

      <!-- Selected Image -->
      <div class="col-lg-5 order-lg-2 order-1" style="margin-left:70px;">
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
          <div>
            @if($product->product_detail)
              <div class="product_text"><label>Include </label></div>       
              <div class="product_text" style="margin-top: 0px"><p>{{ $product->product_detail }}</p></div>
            @endif
          </div>
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
            <form action="{{ url('add/to/cart/'.$product->id) }}" method="POST"> @csrf
              <input type="hidden" name="maxQty" value={{ $product->product_quantity }}>
              <input type="hidden" name="jenis" value={{ $product->jenis }}>
              

              <?php
              $handleQty = array();   
              $cart = Cart::instance(Auth::id())->content();
              foreach ($cart as $row){
                if($row->id == $product->id){
                  $handleQty = [$row->id];
                  }
                }
              ?>
              
              <div class="form-group">
                <div class="row mt-2" >               
                  <div class="col-9">
                    @if($product->product_quantity > 0  && !$handleQty) 
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Quantity</label>
                        <input type="number" class="form-control" min="1" max={{ $product->product_quantity }} pattern="[0-9]" name="product_quantity" value="1" autocomplete="off">
                      </div>
                    @endif
                  </div>
                  <div class="col-3"></div>
                </div>
              </div>


              <div class="product_price" style="margin-top: 25px">{{ rupiah($product->price) }} / Hari</div>
              <div class="button_container">
                @if($product->product_quantity > 0 && !$handleQty  )
                <button type="submit" class="button cart_button addcart">Add to Cart</button>
                @elseif($product->product_quantity == 0)
                <div class="btn btn-warning btn-lg">Stok Kosong</div>
                @else
                <a href="{{ route('show.cart') }}" class="btn btn-info btn-lg">Open Cart</a>
                @endif
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
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('.addcart').on('click', function(){
          var id = $(this).data('id');
          if(id){
              $.ajax({
                  url: '{{  url('add/to/cart/') }}/'+id,
                  type: 'GET',
                  dataType: 'json',
                  success: function(data){
                      var items = document.getElementsByClassName('product_fav');
                          for(var x = 0; x < items.length; x++)
                          {
                              var item = items[x];
                              item.addEventListener('click', function(fn)
                              {
                                  fn.target.classList.add('active');
                              });
                          }
                      const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                          onOpen: (toast) => {
                              toast.addEventListener('mouseenter', Swal.stopTimer)
                              toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                          })

                          if($.isEmptyObject(data.error)){
                              Toast.fire({
                                  icon: 'success',
                                  title: data.success
                          })
                          }else{
                              Toast.fire({
                                  icon: 'error',
                                  title: data.error
                              })
                          }     
      
                      }, 
                  });
          }else{
              alert('danger');
          }
      });
  });
</script> --}}
@endsection
