@extends('layouts.app')
@section('content')
@include('layouts.menubar')



{{-- <!-- Hot New Arrivals -->
<div class="new_arrivals">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="tabbed_container">
          <div class="tabs clearfix tabs-right">
            <div class="new_arrivals_title">Hot New Arrivals</div>
            <ul class="clearfix">
              <li class="active">Featured</li>
              <li>Audio & Video</li>
              <li>Laptops & Computers</li>
            </ul>
            <div class="tabs_line"><span></span></div>
          </div>
          <div class="row">
            <div class="col-lg-9" style="z-index: 1">
              <!-- Product Panel -->
              <div class="product_panel panel active">
                <div class="arrivals_slider slider">
                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_1.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Astro M2 Black</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">
                          -25%
                        </li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_2.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Transcend T.Sonic</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button active">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_3.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Xiaomi Band 2...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_4.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Rapoo T8 White</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_5.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Philips BT6900A</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_6.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Nokia 3310(2017)...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_7.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Rapoo 7100p Gray</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">
                          -25%
                        </li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_8.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div><a href="product.html">Canon EF</a></div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_1.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Gembird SPK-103</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_2.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Canon IXUS 175...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_3.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_4.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_5.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_6.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_7.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_8.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="arrivals_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel">
                <div class="arrivals_slider slider">
                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_1.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">
                          -25%
                        </li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_2.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button active">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_3.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_4.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_5.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_6.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_7.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">
                          -25%
                        </li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_8.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_1.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_2.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_3.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_4.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_5.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_6.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_7.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_8.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="arrivals_slider_dots_cover"></div>
              </div>

              <!-- Product Panel -->
              <div class="product_panel panel">
                <div class="arrivals_slider slider">
                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_1.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">
                          -25%
                        </li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_2.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button active">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_3.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_4.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_5.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_6.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_7.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount">
                          -25%
                        </li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_8.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_1.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_2.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_3.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_4.jp')}}g" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_5.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_6.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_7.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$379</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>

                  <!-- Slider Item -->
                  <div class="arrivals_slider_item">
                    <div class="border_active"></div>
                    <div
                      class="product_item is_new d-flex flex-column align-items-center justify-content-center text-center"
                    >
                      <div
                        class="product_image d-flex flex-column align-items-center justify-content-center"
                      >
                        <img src="{{asset('frontend-theme/images/new_8.jpg')}}" alt="" />
                      </div>
                      <div class="product_content">
                        <div class="product_price">$225</div>
                        <div class="product_name">
                          <div>
                            <a href="product.html">Huawei MediaPad...</a>
                          </div>
                        </div>
                        <div class="product_extras">
                          <div class="product_color">
                            <input
                              type="radio"
                              checked
                              name="product_color"
                              style="background: #b19c83"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #000000"
                            />
                            <input
                              type="radio"
                              name="product_color"
                              style="background: #999999"
                            />
                          </div>
                          <button class="product_cart_button">
                            Add to Cart
                          </button>
                        </div>
                      </div>
                      <div class="product_fav">
                        <i class="fas fa-heart"></i>
                      </div>
                      <ul class="product_marks">
                        <li class="product_mark product_discount"></li>
                        <li class="product_mark product_new">new</li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="arrivals_slider_dots_cover"></div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="arrivals_single clearfix">
                <div
                  class="d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="arrivals_single_image">
                    <img src="{{asset('frontend-theme/images/new_single.png')}}" alt="" />
                  </div>
                  <div class="arrivals_single_content">
                    <div class="arrivals_single_category">
                      <a href="#">Smartphones</a>
                    </div>
                    <div class="arrivals_single_name_container clearfix">
                      <div class="arrivals_single_name">
                        <a href="#">LUNA Smartphone</a>
                      </div>
                      <div class="arrivals_single_price text-right">
                        $379
                      </div>
                    </div>
                    <div
                      class="rating_r rating_r_4 arrivals_single_rating"
                    >
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <form action="#">
                      <button class="arrivals_single_button">
                        Add to Cart
                      </button>
                    </form>
                  </div>
                  <div class="arrivals_single_fav product_fav active">
                    <i class="fas fa-heart"></i>
                  </div>
                  <ul class="arrivals_single_marks product_marks">
                    <li
                      class="arrivals_single_mark product_mark product_new"
                    >
                      new
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Best Sellers -->
<div class="best_sellers">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="tabbed_container">
          <div class="tabs clearfix tabs-right">
            <div class="new_arrivals_title">Hot Best Sellers</div>
            <ul class="clearfix">
              <li class="active">Top 20</li>
              <li>Audio & Video</li>
              <li>Laptops & Computers</li>
            </ul>
            <div class="tabs_line"><span></span></div>
          </div>

          <div class="bestsellers_panel panel active">
            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">
              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_1.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_2.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Samsung J730F...</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_3.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Nomi Black White</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_4.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Samsung Charm Gold</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_5.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Beoplay H7</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_6.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Huawei MediaPad T3</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_1.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_2.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_3.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_4.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_5.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_6.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="bestsellers_panel panel">
            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">
              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_1.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_2.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_3.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_4.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_5.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_6.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_1.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_2.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_3.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_4.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_5.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_6.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="bestsellers_panel panel">
            <!-- Best Sellers Slider -->

            <div class="bestsellers_slider slider">
              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_1.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_2.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_3.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_4.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_5.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_6.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_1.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_2.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_3.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_4.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item discount">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_5.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class="bestsellers_item">
                <div
                  class="bestsellers_item_container d-flex flex-row align-items-center justify-content-start"
                >
                  <div class="bestsellers_image">
                    <img src="{{asset('frontend-theme/images/best_6.png')}}" alt="" />
                  </div>
                  <div class="bestsellers_content">
                    <div class="bestsellers_category">
                      <a href="#">Headphones</a>
                    </div>
                    <div class="bestsellers_name">
                      <a href="product.html">Xiaomi Redmi Note 4</a>
                    </div>
                    <div class="rating_r rating_r_4 bestsellers_rating">
                      <i></i><i></i><i></i><i></i><i></i>
                    </div>
                    <div class="bestsellers_price discount">
                      $225<span>$300</span>
                    </div>
                  </div>
                </div>
                <div class="bestsellers_fav active">
                  <i class="fas fa-heart"></i>
                </div>
                <ul class="bestsellers_marks">
                  <li class="bestsellers_mark bestsellers_discount">
                    -25%
                  </li>
                  <li class="bestsellers_mark bestsellers_new">new</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> --}}


<!-- Banner -->
<div class="banner">
  <div class="banner_background" style="background-image:url({{ asset('frontend-theme/images/banner_background.jpg') }})"></div>
  <div class="container fill_height">
    <div class="row fill_height">
      <div class="banner_product_image"><img src="{{ asset('frontend-theme/images/banner_product.png') }}" alt=""></div>
      <div class="col-lg-5 offset-lg-4 fill_height">
        <div class="banner_content">
          <h1 class="banner_text">new era of smartphones</h1>
          <div class="banner_price"><span>$530</span>$460</div>
          <div class="banner_product_name">Apple Iphone 6s</div>
          <div class="button banner_button"><a href="#">Shop Now</a></div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Recently Viewed</h3>
          <div class="viewed_nav_container">
            <div class="viewed_nav viewed_prev">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="viewed_nav viewed_next">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>

        <div class="viewed_slider_container">
          <!-- Recently Viewed Slider -->

          <div class="owl-carousel owl-theme viewed_slider">
            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_1.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$225<span>$300</span></div>
                  <div class="viewed_name">
                    <a href="#">Beoplay H7</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_2.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$379</div>
                  <div class="viewed_name">
                    <a href="#">LUNA Smartphone</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_3.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$225</div>
                  <div class="viewed_name">
                    <a href="#">Samsung J730F...</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_4.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$379</div>
                  <div class="viewed_name">
                    <a href="#">Huawei MediaPad...</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_5.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$225<span>$300</span></div>
                  <div class="viewed_name">
                    <a href="#">Sony PS4 Slim</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_6.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$375</div>
                  <div class="viewed_name">
                    <a href="#">Speedlink...</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Recently Viewed</h3>
          <div class="viewed_nav_container">
            <div class="viewed_nav viewed_prev">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="viewed_nav viewed_next">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>

        <div class="viewed_slider_container">
          <!-- Recently Viewed Slider -->

          <div class="owl-carousel owl-theme viewed_slider">
            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_1.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$225<span>$300</span></div>
                  <div class="viewed_name">
                    <a href="#">Beoplay H7</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_2.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$379</div>
                  <div class="viewed_name">
                    <a href="#">LUNA Smartphone</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_3.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$225</div>
                  <div class="viewed_name">
                    <a href="#">Samsung J730F...</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_4.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$379</div>
                  <div class="viewed_name">
                    <a href="#">Huawei MediaPad...</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_5.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$225<span>$300</span></div>
                  <div class="viewed_name">
                    <a href="#">Sony PS4 Slim</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>

            <!-- Recently Viewed Item -->
            <div class="owl-item">
              <div
                class="viewed_item d-flex flex-column align-items-center justify-content-center text-center"
              >
                <div class="viewed_image">
                  <img src="{{asset('frontend-theme/images/view_6.jpg')}}" alt="" />
                </div>
                <div class="viewed_content text-center">
                  <div class="viewed_price">$375</div>
                  <div class="viewed_name">
                    <a href="#">Speedlink...</a>
                  </div>
                </div>
                <ul class="item_marks">
                  <li class="item_mark item_discount">-25%</li>
                  <li class="item_mark item_new">new</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Brands -->
<div class="brands">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="brands_slider_container">
          <!-- Brands Slider -->

          <div class="owl-carousel owl-theme brands_slider">
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_1.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_2.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_3.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_4.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_5.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_6.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_7.jpg')}}" alt="" />
              </div>
            </div>
            <div class="owl-item">
              <div
                class="brands_item d-flex flex-column justify-content-center"
              >
                <img src="{{asset('frontend-theme/images/brands_8.jpg')}}" alt="" />
              </div>
            </div>
          </div>

          <!-- Brands Slider Navigation -->
          <div class="brands_nav brands_prev">
            <i class="fas fa-chevron-left"></i>
          </div>
          <div class="brands_nav brands_next">
            <i class="fas fa-chevron-right"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter -->
<div class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col">
        <div
          class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center"
        >
          <div class="newsletter_title_container">
            <div class="newsletter_icon">
              <img src="{{ asset('frontend-theme/images/send.png') }}" alt="" />
            </div>
            <div class="newsletter_title">Sign up for Newsletter</div>
            <div class="newsletter_text">
              <p>...and receive %20 coupon for first shopping.</p>
            </div>
          </div>
          <div class="newsletter_content clearfix">
            <form action="#" class="newsletter_form">
              <input
                type="email"
                class="newsletter_input"
                required="required"
                placeholder="Enter your email address"
              />
              <button class="newsletter_button">Subscribe</button>
            </form>
            <div class="newsletter_unsubscribe_link">
              <a href="#">unsubscribe</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')
@endsection