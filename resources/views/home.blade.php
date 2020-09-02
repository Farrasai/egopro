@extends('layouts.app')
@section('content')
@include('layouts.menubar')
  <div class="contact_form">
    <div class="container">
      <div class="row">
        <div class="col-8 card">
          <div class="card-title mt-4 text-center">
            <h3>History Sewa</h3>
          </div>
          <table class="table table-response">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Body</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td scope="col">1</td>
                <td scope="col">Mark 1</td>
                <td scope="col">Mark 2</td>
                <td scope="col">Mark 3</td>
              </tr>
              <tr>
                <td scope="col">1</td>
                <td scope="col">Mark 1</td>
                <td scope="col">Mark 2</td>
                <td scope="col">Mark 3</td>
              </tr>
              <tr>
                <td scope="col">1</td>
                <td scope="col">Mark 1</td>
                <td scope="col">Mark 2</td>
                <td scope="col">Mark 3</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="{{ asset('frontend-theme/images/avatar-user.jpg') }}" alt="avatar-user" class="card-img-top mt-2" style="height: 90px; width:90px; margin:auto; border-radius:50%;">
            <div class="card-body">
              <div class="card-title text-center">
                <h5>{{ Auth::user()->name }}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="">Ubah Profile</a></li>
                <li class="list-group-item"><a href="">Ubah Password</a></li>
                <li class="list-group-item"><a href="">Ubah Sewa</a></li>
              </ul>
              <div class="card-body">
                <a href="{{ route('user.logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="panel"></div>
  </div>
@include('layouts.footer')
@endsection
