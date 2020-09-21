@extends('layouts.app')
@section('content')
@include('layouts.menubar')

@php
  // $cats = DB::table('categories')->first();
  // $catId = $cats->id;
  $productsCamera = DB::table('products')->where('category_id', 1)->limit(10)->orderBy('id','DESC')->get();
  $productsAudio = DB::table('products')->where('category_id', 2)->limit(10)->orderBy('id','DESC')->get();
  $productsEquipment = DB::table('products')->where('category_id', 3)->limit(10)->orderBy('id','DESC')->get();
  $productsLensa = DB::table('products')->where('category_id', 4)->limit(10)->orderBy('id','DESC')->get();
  $productsLighting = DB::table('products')->where('category_id', 5)->limit(10)->orderBy('id','DESC')->get();
@endphp

<!-- Banner -->
{{-- <div class="banner">
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
</div> --}}

<div class="banner">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{ asset('media/egopro/slide1.jpg') }}" alt="First slide" style="height: 500px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('media/egopro/slide2.jpg') }}" alt="Second slide" style="height: 500px">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('media/egopro/slide3.jpg') }}" alt="Third slide" style="height: 500px">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="viewed">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Camera</h3>
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
            @foreach($productsCamera as $product)
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
                style="min-height: 250px"
              >
                <div class="viewed_image">
                  <img src="{{asset($product->image)}}"/>
                </div>
                <div class="viewed_content text-center" style="margin-top:0px">
                  <div class="viewed_price">{{rupiah($product->price)}}</div>
                  <div class="viewed_name">
                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{$product->product_name}}</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="viewed" style="margin-top:-40px ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Audio</h3>
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
            @foreach($productsAudio as $product)
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center"
                style="min-height:250px;"
              >
                <div class="viewed_image">
                  <img src="{{asset($product->image)}}" alt="" />
                </div>
                <div class="viewed_content text-center" style="margin-top:0px">
                  <div class="viewed_price">{{rupiah($product->price)}}</div>
                  <div class="viewed_name">
                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{$product->product_name}}</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="viewed" style="margin-top:-40px ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Equipment</h3>
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
            @foreach($productsEquipment as $product)
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" style="min-height:250px;"
              >
                <div class="viewed_image">
                  <img src="{{asset($product->image)}}" alt="" />
                </div>
                <div class="viewed_content text-center" style="margin-top:0px">
                  <div class="viewed_price">{{rupiah($product->price)}}</div>
                  <div class="viewed_name">
                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{$product->product_name}}</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="viewed" style="margin-top:-40px ">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Lensa</h3>
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
            @foreach($productsLensa as $product)
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" style="min-height:250px;"
              >
                <div class="viewed_image">
                  <img src="{{asset($product->image)}}" alt="" />
                </div>
                <div class="viewed_content text-center" style="margin-top:0px">
                  <div class="viewed_price">{{rupiah($product->price)}}</div>
                  <div class="viewed_name">
                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{$product->product_name}}</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="viewed" style="margin-top:-40px;">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="viewed_title_container">
          <h3 class="viewed_title">Lighting</h3>
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
            @foreach($productsLighting as $product)
            <div class="owl-item">
              <div
                class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center" style="min-height:250px;"
              >
                <div class="viewed_image">
                  <img src="{{asset($product->image)}}" alt="" />
                </div>
                <div class="viewed_content text-center" style="margin-top:0px">
                  <div class="viewed_price">{{rupiah($product->price)}}</div>
                  <div class="viewed_name">
                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_name) }}">{{$product->product_name}}</a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

{{-- <div class="viewed">
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
</div> --}}

{{-- <!-- Brands -->
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
</div> --}}

@include('layouts.footer')
@endsection