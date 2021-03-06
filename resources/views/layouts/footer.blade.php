<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 footer_col">
        <div class="footer_column footer_contact">
          <div class="logo_container">
            <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('media/egopro/logo.png') }}" alt="" style="width: 300px; height: 80px;"></a></div>
          </div>

          <div class="footer_title">EGOPRO | Sewa Kamera Jogja / Jogja sewa kamera / Rental kamera sewa lensa</div>
          <div class="footer_phone">085-70-2222-111</div>
          <div class="footer_contact_text">
            <p>Jl Candra Kirana no 14 Sagan</p>
            <p>Terban, Yogyakarta, Indonesia</p>

          </div>
          <div class="footer_social">
            <ul>
              <li>
                <a href="https://www.instagram.com/egopro/"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://www.twitter.com/egoprojogja/"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://api.whatsapp.com/send?phone=6285702222111&"><i class="fab fa-whatsapp "></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCrUmxqChLb6k-EYvZaOr5rQ?app=desktop"><i class="fab fa-youtube"></i></a>
              </li>          
            </ul>
          </div>
        </div>
      </div>

      <div class="col-lg-2 offset-lg-2">
        <div class="footer_column">
          <div class="footer_title">Menu</div>
          <ul class="footer_list">
            <li><a href="/">Home</a></li>
            <li><a href="/allProduct">Product</a></li>
            <li><a href="/contact">Info</a></li>
            @if (!Auth::user())
            <li><a href="/login">Login</a></li>
            @endif
            
          </ul>
          {{-- <div class="footer_subtitle">Gadgets</div>
          <ul class="footer_list">
            <li><a href="#">Car Electronics</a></li>
          </ul> --}}
        </div>
      </div>

      <div class="col-lg-2">
        <div class="footer_column">
          <div class="footer_title">Find it Fast</div>
          <ul class="footer_list">
            <li><a href="/products/1">Camera</a></li>
            <li><a href="/products/2">Audio</a></li>
            <li><a href="/products/3">Equipment</a></li>
            <li><a href="/products/4">Lensa</a></li>
            <li><a href="/products/5">Lighting</a></li>
            <li><a href="/products/6">Others</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2">
        <div class="footer_column">
          <div class="footer_title">Kontak</div>
          <ul class="footer_list">
            <li><p  style="font-size:12px; font-weight: 500;color: rgba(0,0,0,0.4); font-family: Helvetica">EGOPRO | Sewa Kamera Jogja / Jogja sewa kamera / Rental kamera sewa lensa</p></li>
            <li><p  style="font-size:12px; font-weight: 500;color: rgba(0,0,0,0.4); font-family: Helvetica">Jl Candra Kirana no 14 Sagan, Terban, Yogyakarta, Indonesia</p></li>
            <li><p  style="font-size:12px; font-weight: 500;color: rgba(0,0,0,0.4); font-family: Helvetica">egoprojogja@gmail.com</p></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col">
        
        <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
          <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
           &copy; EGOPRO | Sewa Kamera Jogja / Jogja sewa kamera / Rental kamera sewa lensa <script>document.write(new Date().getFullYear());</script> - All rights reserved
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

