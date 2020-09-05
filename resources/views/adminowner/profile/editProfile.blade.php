@extends('adminowner.layouts.admin_layout')

@section('admin_content')

    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Update Profile</h6>
              <p class="mg-b-20 mg-sm-b-30"></p>
              <form action="{{ route('admin.update.profile') }}" method="POST" enctype="multipart/form-data">@csrf
                <input type="hidden" name="id" value={{ $data->id }}>
                <div class="row">
                  <label class="col-sm-4 form-control-label">Username: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="username" class="form-control" value="{{ $data->username }}">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Name: </label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="name" class="form-control"  value="{{ $data->name }}">
                  </div>
                </div>
                <div class="row mg-t-20">
                  <div class="col-sm-4 form-control-label">
                    @if($data->avatar)
                      <img id="img" src="{{ URL::to($data->avatar) }}" alt="avatar-user" class="card-img-top mt-2" style="width: 90px; height:90px">
                    @else
                      <img id="img" src="{{ asset('frontend-theme/images/avatar-user.jpg') }}" alt="avatar-user" class="card-img-top mt-2"   style="width: 90px; height:90px">
                    @endif
                  </div>
                  <div class="col-sm-8 mt-5">
                    <label class="custom-file">
                      <input type="file" id="file" class="custom-file-input" value="{{ $data->avatar }}" name="avatar" onchange="readURL(this)">
                      <div style="margin-top: -25px">
                        <span class="custom-file-control"></span>
                        <input type="hidden" name="old_avatar" value="{{ $data->avatar }}" >
                      </div>
                    </label>
                  </div>
                </div>
                  
                <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info mg-r-5">Update Profile</button>
                </div><!-- form-layout-footer -->
              </form>
            </div><!-- card -->
          </div><!-- col-6 -->

          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
              <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Update Password</h6>
              <p class="mg-b-30 tx-gray-600"></p>
              <form method="POST" action="{{ route('admin.password.update') }}" aria-label="{{ __('Reset Password') }}">
                @csrf
                  <div class="row row-xs mg-t-20">
                    <label class="col-sm-4 form-control-label">Password Lama:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input id="password-confirm" type="password" class="form-control{{ $errors->has('oldpass') ? ' is-invalid' : '' }}" name="oldpass" value="{{ $oldpass ?? old('oldpass') }}" required autofocus>
                      @if ($errors->has('oldpass'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('oldpass') }}</strong>
                        </span>
                      @endif
                    </div>
                  </div>
                  <div class="row row-xs mg-t-20">
                    <label class="col-sm-4 form-control-label">Password Terbaru:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input id="password-confirm" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    </div>
                    @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                    @endif
                  </div>
                  <div class="row row-xs mg-t-20">
                    <label class="col-sm-4 form-control-label">Confirm Password:</label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>
                  <div class="row row-xs mg-t-30">
                    <div class="col-sm-8 mg-l-auto">
                      <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5 mt-4">Update Password</button>
                      </div><!-- form-layout-footer -->
                    </div><!-- col-8 -->
                  </div>
              </form>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->
      </div>
    </div>
</div>
<script type="text/javascript">
  function readURL(input){
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#img')
        .attr('src', e.target.result)
        .width(90)
        .height(90);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection