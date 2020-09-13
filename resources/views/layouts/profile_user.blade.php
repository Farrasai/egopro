
<div class="col-lg-3 col-sm-12">
  <div class="card  bg-light">
    @if(!Auth::user()->avatar == NULL)
      <img src="{{ asset(Auth::user()->avatar) }}" alt="avatar-user" class="card-img-top mt-2" style="height: 90px; width:90px; margin:auto; border-radius:50%;">
    @else
      <img src="{{ asset('frontend-theme/images/avatar-user.jpg') }}" alt="avatar-user" class="card-img-top mt-2" style="height: 90px; width:90px; margin:auto; border-radius:50%;">
    @endif
    <div class="card-body">
      <div class="card-title text-center">
        <h5>{{ Auth::user()->name  }}</h5>
      </div>
      <ul class="list-group list-group-flush">
        {{-- @if($data) --}}
        <li class="list-group-item"><a href="{{ route('home.user') }}">Riwayat Sewa</a></li>
        <li class="list-group-item"><a href="{{ route('userSewa.peminjaman') }}">Sewa Barang</a></li>
        <li class="list-group-item"><a href="{{ route('userSewa.pengembalian') }}">Pengembalian Barang</a></li>
        @if(Cart::instance(Auth::id())->count() > 0)
          <li class="list-group-item"><a href="{{ route('show.cart') }}">Ubah Cart</a></li>
        @endif
        {{-- @endif --}}
      </ul>
      <div class="card-body">
        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
      </div>
    </div>
  </div>
</div>