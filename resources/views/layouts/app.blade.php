<!DOCTYPE html>
<html lang="en">
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('frontend-theme/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/plugins/slick-1.8.0/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend-theme/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/contact_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/contact_responsive.css') }}">

{{-- Toaster --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>
  <body>
    <div class="super_container">
      <!-- Header -->
      <header class="header">
        <!-- Top Bar -->
        <div class="top_bar">
          <div class="container">
            <div class="row">
              <div class="col d-flex flex-row">
                <div class="top_bar_contact_item">
                  <div class="top_bar_icon">
                    <img src="{{asset('frontend-theme/images/phone.png')}}" alt="" />
                  </div>
                  +38 068 005 3570
                </div>
                <div class="top_bar_contact_item">
                  <div class="top_bar_icon">
                    <img src="{{asset('frontend-theme/images/mail.png')}}" alt="" />
                  </div>
                  <a href="mailto:test@gmail.com">test@gmail.com</a>
                </div>
                <div class="top_bar_content ml-auto">
                  <div class="top_bar_user">
                    <div class="user_icon">
                      <img src="{{asset('frontend-theme/images/user.svg')}}" alt="" />
                    </div>
                    @guest
                      <div><a href="{{route('register')}}">Register</a></div>
                      <div><a href="{{route('login')}}">Sign in</a></div>
                    @else
                      <a href="{{route('login')}}">{{ Auth::user()->name }}</a>                   
                    @endguest
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @yield('content')

  
      
    </div>


<script src="{{asset('frontend-theme/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend-theme/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('frontend-theme/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/slick-1.8.0/slick.js')}}"></script>
<script src="{{asset('frontend-theme/plugins/easing/easing.js')}}"></script>
<script src="{{ asset('frontend-theme/js/custom.js') }}"></script>
{{-- Toaster  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch(type){
      case 'info' :
      toastr.info("{{ Session::get('message') }}")
      break
      
      case 'success' :
      toastr.success("{{ Session::get('message') }}")
      break
      
      case 'warning' :
      toastr.warning("{{ Session::get('message') }}")
      break
      
      case 'error' :
      toastr.error("{{ Session::get('message') }}")
      break
    }
  @endif
  
</script>
</body>

</html>