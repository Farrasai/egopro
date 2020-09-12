<!DOCTYPE html>
<html lang="en">
<head>
<title>EGOPRO | Sewa Kamera Jogja</title>
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

{{-- All Product --}}
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/shop_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/shop_responsive.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/product_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/product_responsive.css') }}">

{{-- Cart --}}
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/cart_styles.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('frontend-theme/styles/cart_responsive.css') }}">

{{-- Toaster --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

{{-- Datepicker --}}
<link
rel="stylesheet"
href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"
/>
<link rel="stylesheet" href="/resources/demos/style.css" />
<link
rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
/>
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.css



">

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

                  085-70-2222-111

                </div>
                <div class="top_bar_contact_item">
                  <div class="top_bar_icon">
                    <img src="{{asset('frontend-theme/images/mail.png')}}" alt="" />
                  </div>
                  <a href="mailto:egoprojogja@gmail.com">egoprojogja@gmail.com</a>
                </div>
                <div class="top_bar_content ml-auto">
                  <div class="top_bar_user">
                    @guest
                      <div><a href="{{route('register')}}">Register</a></div>
                      <div></div>
                      <div><a href="{{route('login')}}" >Sign in</a></div>
                    @else
                      <ul class="standard_dropdown top_bar_dropdown">
                        <li>
                            <div class="user_icon">                            
                              <a href="{{route('login')}}">
                                <img src="{{asset('frontend-theme/images/user.svg')}}"/>
                                {{ Auth::user()->name }}
                              </a>  
                            </div>
                            <ul>
                                <li><a href="{{ route('userProfile.edit') }}">Ubah Profile</a></li>
                                <li><a href="{{ route('password.edit') }}">Ubah Password</a></li>
                            </ul>
                        </li>
                      </ul>                 
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
{{-- All product --}}
<script src="{{ asset('frontend-theme/plugins/Isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend-theme/plugins/jquery-ui-1.12.1.custom/jquery-ui.js') }}"></script>
<script src="{{ asset('frontend-theme/plugins/parallax-js-master/parallax.min.js') }}"></script>
<script src="{{ asset('frontend-theme/js/shop_custom.js') }}"></script>
<script src="{{ asset('frontend-theme/js/product_custom.js') }}"></script>
{{-- Cart --}}
<script src="{{ asset('frontend-theme/js/cart_custom.js') }}"></script>
{{-- Date --}}

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js
"></script>

{{-- Toaster  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- Sweetalert --}}
<script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>

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

<script>  
  $(document).on("click", "#sewa", function(e){
      e.preventDefault();
      var form = this;
          swal({
            title: "Apakah barang yang akan anda sewa sudah sesuai, data-data sewa yang anda masukkan sudah benar?",
            text: "Jika sudah sesuai dan benar maka anda bisa tekan OK",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((sewa) => {
            if (sewa) {
              $('#formFinal').submit();
            } else {
              swal("Cancel Sewa");
            }
          });
      });
</script>

<script>
  var lama = {
    sewa: "",
    pengembalian: "",
    init: function () {
      this.setFirst();
      this.setSecond();
    },
    setFirst: function () {
      var _this = this;
      $("#datetimepickerSewa").datepicker({
        onSelect: function () {
          _this.sewa = $(this).val();
          _this.calcDiff("datetimepickerSewa");
        },
        minDate: new Date(),
        // dateFormat: "dd-mm-yy"
      });
    },
    setSecond: function () {
      var _this = this;
      $("#datetimepickerPengembalian").datepicker({
        onSelect: function () {
          _this.pengembalian = $(this).val();
          _this.calcDiff("datetimepickerPengembalian");
        },
        minDate: new Date(),
        // dateFormat: "dd-mm-yy"
      });
    },
    calcDiff: function (string) {
      var date1 = new Date(this.sewa);
      var date2 = new Date(this.pengembalian);

      var timeDiff = Math.abs(date2.getTime() - date1.getTime());
      var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
      if (date1 > date2) {
        var newdate = $("#" + string).datepicker("getDate");
        newdate.setDate(new Date(newdate).getDate());
        if (string == "datetimepickerSewa") {
          this.pengembalian = newdate;
          $("#datetimepickerPengembalian").datepicker("setDate", newdate);
          $("#lama").val(0);
        } else {
          this.sewa = newdate;
          $("#datetimepickerSewa").datepicker("setDate", newdate);
          $("#lama").val(0);
        }
      } else {
        $("#lama").val(`${diffDays} Hari`);
      }
    },
  };
  lama.init();
</script>

<script>
  $("#jamSewa").timepicker();
  $("#jamPengembalian").timepicker();
</script>
</body>
</html>