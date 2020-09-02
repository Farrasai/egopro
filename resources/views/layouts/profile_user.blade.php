<div class="col-3">
  <div class="card">
    <img src="{{ asset('frontend-theme/images/avatar-user.jpg') }}" alt="avatar-user" class="card-img-top mt-2" style="height: 90px; width:90px; margin:auto; border-radius:50%;">
    <div class="card-body">
      <div class="card-title text-center">
        <h5>{{ Auth::user()->name  }}</h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href=>Ubah Profile</a></li>
        <li class="list-group-item"><a href="{{ route('password.edit') }}">Ubah Password</a></li>
        <li class="list-group-item"><a href="">Ubah Sewa</a></li>
        <li class="list-group-item"><a href="{{ route('home.user') }}">Riwayat Sewa</a></li>
      </ul>
      <div class="card-body">
        <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
      </div>
    </div>
  </div>
</div>