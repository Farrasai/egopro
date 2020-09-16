<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Egopro</title>

    <!-- vendor css -->
    <link href="{{ asset('backend-theme/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/highlightjs/github.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/datatables/jquery.dataTables.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{ asset('backend-theme/lib/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet">

    {{-- Toaster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('backend-theme/css/starlight.css')}}">
  </head>

<body>
  @guest

  @else

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="sl-logo"><a href="">Egopro Admin</a></div>
    <div class="sl-sideleft">
      

      <label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="{{ route('admin.index') }}" class="sl-menu-link" id="dashboard">
          <div class="sl-menu-item" >
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('product.admin') }}" class="sl-menu-link" id="barang">
          <div class="sl-menu-item" >
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Daftar Barang</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="{{ route('user.admin') }}" class="sl-menu-link" id="pelanggan">
          <div class="sl-menu-item" >
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Daftar Pelanggan</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link" id="transaksi">
          <div class="sl-menu-item" >
            <i class="menu-item-icon icon ion-ios-gear-outline tx-24"></i>
            <span class="menu-item-label">Transaksi</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link" id="laporan">
          <div class="sl-menu-item" >
            <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
            <span class="menu-item-label">Laporan</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="sl-header">
      <div class="sl-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      </div><!-- sl-header-left -->
      <div class="sl-header-right">
        <nav class="nav">
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name">{{ Auth::user()->name }}</span></span>
              @if(!Auth::user()->avatar == NULL)
                <img src="{{ asset(Auth::user()->avatar) }}" class="wd-32 rounded-circle" alt="">
              @else
                <img src="{{ asset('frontend-theme/images/avatar-user.jpg') }}" class="wd-32 rounded-circle" alt="">
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="{{ route('admin.edit') }}"><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
                <li><a href={{route('admin.logout')}}><i class="icon ion-power"></i> Sign Out</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
      </div><!-- sl-header-right -->
    </div><!-- sl-header -->
    <!-- ########## END: HEAD PANEL ########## -->

    <script src="{{ asset('backend-theme/lib/jquery/jquery.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/popper.js/popper.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/jquery-ui/jquery-ui.js')}}"></script>
    

    @endguest
    @yield('admin_content')

 

    <!-- ########## END: MAIN PANEL ########## -->

    <script src="{{ asset('backend-theme/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/jquery.sparkline.bower/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/d3/d3.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/chart.js/Chart.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/Flot/jquery.flot.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/Flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/flot-spline/jquery.flot.spline.js')}}"></script>

    <script src="{{ asset('backend-theme/js/starlight.js')}}"></script>
    <script src="{{ asset('backend-theme/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('backend-theme/js/dashboard.js')}}"></script>

    <script src="{{ asset('backend-theme/lib/highlightjs/highlight.pack.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/datatables-responsive/dataTables.responsive.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/select2/js/select2.min.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="{{ asset('backend-theme/lib/parsleyjs/parsley.js')}}"></script>
    {{-- Toaster  --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.sl-menu-link').removeClass('active');
        $('#dashboard').addClass('active');
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
