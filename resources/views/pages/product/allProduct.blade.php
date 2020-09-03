@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="home">
  <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/shop_background.jpg"></div>
  <div class="home_overlay"></div>
  <div class="home_content d-flex flex-column align-items-center justify-content-center">
    <h2 class="home_title">Smartphones & Tablets</h2>
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
              <li><a href="#">Computers & Laptops</a></li>
              <li><a href="#">Cameras & Photos</a></li>
              <li><a href="#">Hardware</a></li>
              <li><a href="#">Smartphones & Tablets</a></li>
              <li><a href="#">TV & Audio</a></li>
              <li><a href="#">Gadgets</a></li>
              <li><a href="#">Car Electronics</a></li>
              <li><a href="#">Video Games & Consoles</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </div>
          <div class="sidebar_section">
            <div class="sidebar_subtitle brands_subtitle">Brands</div>
            <ul class="brands_list">
              <li class="brand"><a href="#">Apple</a></li>
              <li class="brand"><a href="#">Beoplay</a></li>
              <li class="brand"><a href="#">Google</a></li>
              <li class="brand"><a href="#">Meizu</a></li>
              <li class="brand"><a href="#">OnePlus</a></li>
              <li class="brand"><a href="#">Samsung</a></li>
              <li class="brand"><a href="#">Sony</a></li>
              <li class="brand"><a href="#">Xiaomi</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="col-lg-9">
        
        <!-- Shop Content -->

        <div class="shop_content">
          <div class="shop_bar clearfix">
            <div class="shop_product_count"><span>186</span> products found</div>
            <div class="shop_sorting">
              <span>Sort by:</span>
              <ul>
                <li>
                  <span class="sorting_text">highest rated<i class="fas fa-chevron-down"></span></i>
                  <ul>
                    <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "original-order" }'>highest rated</li>
                    <li class="shop_sorting_button" data-isotope-option='{ "sortBy": "name" }'>name</li>
                    <li class="shop_sorting_button"data-isotope-option='{ "sortBy": "price" }'>price</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

          <div class="product_grid">
            <div class="product_grid_border"></div>

            <!-- Product Item -->
            <div class="product_item is_new">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/new_5.jpg') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$225</div>
                <div class="product_name"><div><a href="{{ url('product/details/') }}" tabindex="0">Philips BT6900A</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item discount">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/featured_1.png') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$225<span>$300</span></div>
                <div class="product_name"><div><a href="#" tabindex="0">Huawei MediaPad...</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/featured_2.png') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$379</div>
                <div class="product_name"><div><a href="#" tabindex="0">Apple iPod shuffle</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/featured_3.png') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$225</div>
                <div class="product_name"><div><a href="#" tabindex="0">Sony MDRZX310W</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item is_new">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/featured_4.png') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$379</div>
                <div class="product_name"><div><a href="#" tabindex="0">LUNA Smartphone</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item is_new">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/shop_1.jpg') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$379</div>
                <div class="product_name"><div><a href="#" tabindex="0">Canon IXUS 175...</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/featured_5.png') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$379<span>$300</span></div>
                <div class="product_name"><div><a href="#" tabindex="0">Canon STM Kit...</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>

            <!-- Product Item -->
            <div class="product_item">
              <div class="product_border"></div>
              <div class="product_image d-flex flex-column align-items-center justify-content-center"><img src="{{ asset('frontend-theme/images/featured_6.png') }}" alt=""></div>
              <div class="product_content">
                <div class="product_price">$225<span>$300</span></div>
                <div class="product_name"><div><a href="#" tabindex="0">Samsung J330F</a></div></div>
              </div>
              <div class="product_fav"><i class="fas fa-heart"></i></div>
              <ul class="product_marks">
                <li class="product_mark product_discount">-25%</li>
                <li class="product_mark product_new">new</li>
              </ul>
            </div>
          </div>

          <!-- Shop Page Navigation -->
          <div class="shop_page_nav d-flex flex-row">
            <div class="page_prev d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-left"></i></div>
            <ul class="page_nav d-flex flex-row">
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">...</a></li>
              <li><a href="#">21</a></li>
            </ul>
            <div class="page_next d-flex flex-column align-items-center justify-content-center"><i class="fas fa-chevron-right"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="panel"></div>
@include('layouts.footer')
@endsection