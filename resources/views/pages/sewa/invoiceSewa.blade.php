<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body{
      color: rgb(78, 77, 77);
    }
    .content{
      border: 1px solid rgba(0,0,0,0.125);
      padding:20px;
      margin: 10px;
    }

    .cards{
      border: 1px solid rgba(0,0,0,0.125);
      width: 50%;
    }



  </style>
</head>
<body>
  <div class="content">
    <h1>Bukti Invoice</h1>
    @foreach ($peminjam as $row)    
    <div class="kode-invoice float-right">
      <h5>Kode Invoice : {{ $row->kodeSewa }}</h5>
    </div>
    <div class="cards" style="margin-top: 70px; ">
      <div class="card-body">
        <p class="card-text">Nama : {{ $row->name }}</p>
        <p class="card-text" style="margin-top: -10px;">Email : {{ $row->email }}</p>
        <p class="card-text" style="margin-top: -10px;">Alamat : {{ $row->address }}</p>
        <p class="card-text" style="margin-top: -10px;">No Hp : {{ $row->nohp }}</p>
        <p class="card-text" style="margin-top: -10px;">Tanggal Sewa : {{ date('d-m-Y', strtotime($row->tanggalPeminjaman)) }}</p>
      </div>
    </div>
    @endforeach

    <table class="table table-striped mt-5">
      <thead>
        <tr>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Jumlah Barang</th>
          <th scope="col">Total Bayar</th>
        </tr>
      </thead>
      <tbody>
        @php
          $total = array();
        @endphp
        @foreach ($barang as $row)
        @php
          $total[] = $row->subBiayaSewa;
        @endphp
        <tr>
          <th scope="row">{{ $row->kode_barang }}</th>
          <td>{{ $row->namaProduct }}</td>
          <td>{{ $row->quantity }} Barang</td>
          <td>{{ rupiah($row->subBiayaSewa) }}</td>
        </tr>
        @endforeach
      
      </tbody>
    </table>

    <div class="total float-right" style="margin-right: 117px;">
      {{-- <label style="font-weight: bold; font-size:16px;">Sub Biaya Sewa : </label> --}}
      <label style="font-weight: bold; font-size:16px; text-decoration: underline;">{{ rupiah(array_sum($total)) }}</label>
    </div>

    <p>*Dibawa untuk pengambilan kamera</p>
  </div>
</body>
</html>