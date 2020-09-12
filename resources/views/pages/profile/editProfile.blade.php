@extends('layouts.app')
@section('content')
@include('layouts.menubar')
  <div class="contact_form" style="margin-top:-50px">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-sm-12 card">
          <div class="card-title mt-4 text-center">
          </div>
          <table class="table table-response">
            <div class="container">
              <form action="{{ route('userProfile.update') }}" method="POST" enctype="multipart/form-data"> @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">
                <div class="row">
                  <div class="col-lg-4">
                      <h5 class="form-control-label text-center">Foto Profile</h5><br>
                      @if($data->avatar)
                        <img id="img" src="{{ URL::to($data->avatar) }}" style="width: 220px; height:220px; margin-left:75px">
                      @else
                        <img id="img" src="{{ asset('frontend-theme/images/avatar-user.jpg') }}" alt="avatar-user" class="card-img-top mt-2"   style="width: 220px; height:220px; margin-left:75px">
                      @endif
                        <div class="form-group">
                          <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input" value="{{ $data->avatar }}" name="avatar" onchange="readURL(this)" style="margin-top: 10px">
                            <div style="margin-top: -25px">
                              <span class="custom-file-control"></span>
                              <input type="hidden" name="old_avatar" value="{{ $data->avatar }}" >
                            </div>
                          </label>
                      </div>                 
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="name">Nama</label>
                      <input type="text" name="name" id="name" class="form-control" value="{{ $data->name }}">
                      @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control" value="{{ $data->email }}">
                      @error('email')
                        <div div class="text-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="address">Alamat</label>
                      <input type="text" name="address" id="address" class="form-control" value="{{ $data->address }}"> 
                      @error('address')
                        <div div class="text-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="nohp">No Handphone</label>
                      <input type="text" name="nohp" id="nohp" class="form-control" value="{{ $data->nohp }}">
                      @error('nohp')
                        <div div class="text-danger mt-2">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary mt-2 align-items-center">Ubah Profile</button>
              </form>
            </div>
          </table>
        </div>
        @include('layouts.profile_user')
      </div>
    </div>
    <div class="panel"></div>
  </div>

  <script type="text/javascript">
    function readURL(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#img')
          .attr('src', e.target.result)
          .width(220)
          .height(220);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
@include('layouts.footer')
@endsection


