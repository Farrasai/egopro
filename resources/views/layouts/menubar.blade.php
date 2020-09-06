<?php
  $categories = DB::table('categories')->get();
?>
<div class="header_main">
  <div class="container">
    <div class="row">
      <!-- Logo -->
      <div class="col-lg-2 col-sm-3 col-3 order-1">
        <div class="logo_container">
          <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('media/egopro/logo.png') }}" alt="" style="width: 120px; height: 60px;"></a></div>
        </div>
      </div>

      <!-- Search -->
      <div
        class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right"
      >
        <div class="header_search">
          <div class="header_search_content">
            <div class="header_search_form_container">
              <form action="#" class="header_search_form clearfix">
                <input
                  type="search"
                  required="required"
                  class="header_search_input"
                  placeholder="Search for products..."
                />
                <div class="custom_dropdown">
                  <div class="custom_dropdown_list">
                    <span class="custom_dropdown_placeholder clc"
                      >All Categories</span
                    >
                    {{-- <i class="fas fa-chevron-down"></i> --}}
                    <ul class="custom_list clc">
                      @foreach ($categories as $category)
                      <li>
                        <a class="clc" href="#">{{ $category->category_name }}</a>
                      </li>
                      @endforeach
                      {{-- <li><a class="clc" href="#">Audio</a></li>
                      <li><a class="clc" href="#">Camera</a></li>
                      <li><a class="clc" href="#">Equipment</a></li>
                      <li><a class="clc" href="#">Lens</a></li>
                      <li><a class="clc" href="#">Lighting</a></li> --}}
                    </ul>
                  </div>
                </div>
                <button
                  type="submit"
                  class="header_search_button trans_300"
                  value="Submit"
                >
                  <img src="{{asset('frontend-theme/images/search.png')}}" alt="" />
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Wishlist -->
      <div
        class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right"
      >
        <div
          class="wishlist_cart d-flex flex-row align-items-center justify-content-end"
        >
          <div
            class="wishlist d-flex flex-row align-items-center justify-content-end"
          >
            <div class="wishlist_icon">
              <img src="{{ asset('frontend-theme/images/heart.png') }}" alt="" />
            </div>
            <div class="wishlist_content">
              <div class="wishlist_text"><a href="#">Wishlist</a></div>
              <div class="wishlist_count">115</div>
            </div>
          </div>

          <!-- Cart -->
          @if(Auth::check())
          <div class="cart">
            <div
              class="cart_container d-flex flex-row align-items-center justify-content-end"
            >
              <div class="cart_icon">
                <img src="{{asset('frontend-theme/images/cart.png')}}" alt="" />
                <div class="cart_count"><span>10</span></div>
              </div>
          
              <div class="cart_content">
                <div class="cart_text"><a href="{{ route('show.cart') }}">Cart</a></div>
                <div class="cart_price">$85</div>
              </div>
            </div>
          </div>
          @else
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Main Navigation -->
  <nav class="main_nav">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <div class="main_nav_content d-flex flex-row">

            <!-- Categories Menu -->

            <div class="cat_menu_container">
              <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                <div class="cat_burger"><span></span><span></span><span></span></div>
                <div class="cat_menu_text">categories</div>
              </div>

              <ul class="cat_menu">
                @foreach ($categories as $category)
                  <li><a href="#">{{ $category->category_name  }}<i class="fas fa-chevron-right ml-auto"></i></a></li>  
                @endforeach
                {{-- <li><a href="#">Audio <i class="fas fa-chevron-right ml-auto"></i></a></li>
                <li><a href="#">Camera<i class="fas fa-chevron-right"></i></a></li>
                <li class="hassubs">
                  <a href="#">Equipment<i class="fas fa-chevron-right"></i></a>
                  <ul>
                    <li class="hassubs">
                      <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                      <ul>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                      </ul>
                    </li>
                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                  </ul>
                </li>
                <li><a href="#">Lensa<i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#">Lighting<i class="fas fa-chevron-right"></i></a></li> --}}
              </ul>
            </div>

            <!-- Main Nav Menu -->

            <div class="main_nav_menu ml-auto">
              <ul class="standard_dropdown main_nav_dropdown">
              <li><a href="{{ route('index') }}">Home<i class="fas fa-chevron-down"></i></a></li>
                <li class="hassubs">
                  <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                  <ul>
                    <li>
                      <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                      <ul>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                        <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                      </ul>
                    </li>
                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                  </ul>
                </li>
                <li><a href="{{ route('all.product') }}">Product<i class="fas fa-chevron-down"></i></a></li>
                <li><a href="{{ route('info.user') }}">Contact Info<i class="fas fa-chevron-down"></i></a></li>
              </ul>
            </div>

            <!-- Menu Trigger -->

            <div class="menu_trigger_container ml-auto">
              <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                <div class="menu_burger">
                  <div class="menu_trigger_text">menu</div>
                  <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Menu -->

  <div class="page_menu">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="page_menu_content">
            <!-- <div class="page_menu_search">
              <form action="#">
                <input
                  type="search"
                  required="required"
                  class="page_menu_search_input"
                  placeholder="Search for products..."
                />
              </form>
            </div> -->
            <ul class="page_menu_nav">
              <!-- <li class="page_menu_item has-children">
                <a href="#">Language<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li>
                    <a href="#"
                      >English<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >Italian<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >Spanish<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >Japanese<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                </ul>
              </li>
              <li class="page_menu_item has-children">
                <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                <ul class="page_menu_selection">
                  <li>
                    <a href="#"
                      >US Dollar<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >EUR Euro<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >GBP British Pound<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li>
                    <a href="#"
                      >JPY Japanese Yen<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                </ul>
              </li> -->
              <li class="page_menu_item">
                <a href="#">Home<i class="fa fa-angle-down"></i></a>
              </li>
              <li class="page_menu_item has-children">
                <a href="#"
                  >Product<i class="fa fa-angle-down"></i
                ></a>
                <ul class="page_menu_selection">
                  <li>
                    <a href="#"
                      >Super Deals<i class="fa fa-angle-down"></i
                    ></a>
                  </li>
                  <li class="page_menu_item has-children">
                    <a href="#"
                      >Menu Item<i class="fa fa-angle-down"></i
                    ></a>
                    <ul class="page_menu_selection">
                      <li>
                        <a href="#"
                          >Menu Item<i class="fa fa-angle-down"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#"
                          >Menu Item<i class="fa fa-angle-down"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#"
                          >Menu Item<i class="fa fa-angle-down"></i
                        ></a>
                      </li>
                      <li>
                        <a href="#"
                          >Menu Item<i class="fa fa-angle-down"></i
                        ></a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="page_menu_item">
                <a href="contact.html"
                  >Info<i class="fa fa-angle-down"></i
                ></a>
              </li>
            </ul>

            <div class="menu_contact">
              <div class="menu_contact_item">
                <div class="menu_contact_icon">
                  <img src="{{asset('frontend-theme/images/phone_white.png')}}" alt="" />
                </div>
                +38 068 005 3570
              </div>
              <div class="menu_contact_item">
                <div class="menu_contact_icon">
                  <img src="{{asset('frontend-theme/images/mail_white.png')}}" alt="" />
                </div>
                <a href="mailto:test@gmail.com">test.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>


