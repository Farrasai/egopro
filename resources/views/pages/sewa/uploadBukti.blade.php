@extends('layouts.app')
@section('content')
@include('layouts.menubar')
<div class="row mt-5">
  <div class="col-3"></div>
  <div class="col-lg-6 col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title text-center">
          <h4>Bukti Pembayaran DP</h4>
        </div>
        <ul class="list-group list-group-flush mt-5">
          <form action="{{ route('upload.bukti') }}" method="POST" enctype="multipart/form-data">@csrf
            <div class="form-row">
              <div class="col">
                <label for="formGroupExampleInput">Kode Sewa </label>
                <input type="text" class="form-control"  name="kodeSewa" value="{{ $detailSewa->kodeSewa }}" readonly>
              </div>
            </div>
            <div class="form-row">
              <div class="col mt-3">
                <label for="formGroupExampleInput">Nominal DP</label>
                <input type="text" class="form-control" name="nominal_dp" value="{{ rupiah($bayarDP) }}" readonly>
              </div>
            </div>
            <div class="form-group mt-5">
              <label for="exampleFormControlFile1">Upload bukti pembayaran DP</label>
              <input type="file" class="form-control-file" name="bukti_pembayaran" id="exampleFormControlFile1">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
          </form>
          {{-- @endif --}}
        </ul>
      </div>
    </div>
  </div>
  <div class="col-3"></div>
  <div class="panel"></div>
</div>

@include('layouts.footer')
@endsection