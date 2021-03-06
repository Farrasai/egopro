<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use DB;
use Response;
use Validator;
use Auth;
use PDF;

class TransaksiController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:admin');
  }

  public function pemesananIndex()
  {
    return view('adminowner.transaksi.pengambilan');
  }

  public function pengembalianIndex()
  {
    return view('adminowner.transaksi.pengembalian');
  }

  public function getPemesanan()
  {
    $data = DB::table('sewa')
      ->join('users', 'sewa.userId', '=', 'users.id')
      ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
      ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
      ->select('sewa.id', 'sewa.kodeSewa', 'users.name', 'users.noIdentitas', 'users.nohp', 'peminjaman_barang.jamPeminjaman', 'peminjaman_barang.tanggalPeminjaman', 'pengembalian_barang.tanggalPengembalian')
      ->where('sewa.status', '=', '1')
      ->where('peminjaman_barang.status_peminjaman', '=', '1')
      ->where('pengembalian_barang.status_pengembalian', '=', '1')
      ->get();
    return Datatables::of($data)
      ->addColumn('action', function ($data) {
        $update = '<center><button class="btn btn-success btn-icon mg-r-5 mg-b-10 acc" data-id="' . $data->id . '" id="acc"><div><i class="fa fa-check"></i></div></button>
            <button class="btn btn-primary btn-icon mg-r-5 mg-b-10 detail" data-id="' . $data->id . '"><div><i class="fa fa-eye"></i></div></button></center>';
        return $update;
      })
      ->rawColumns(['action'])
      ->make(true);
  }

  public function getKembali()
  {
    $data = DB::table('sewa')
      ->join('users', 'sewa.userId', '=', 'users.id')
      ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
      ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
      ->select('sewa.id', 'sewa.kodeSewa', 'users.name', 'users.noIdentitas', 'users.nohp', 'pengembalian_barang.jamPengembalian', 'peminjaman_barang.tanggalPeminjaman', 'pengembalian_barang.tanggalPengembalian')
      ->where('sewa.status', '=', '1')
      ->where('peminjaman_barang.status_peminjaman', '=', '2')
      ->where('pengembalian_barang.status_pengembalian', '=', '2')
      ->get();
    return Datatables::of($data)
      ->addColumn('action', function ($data) {
        $update = '<center><button class="btn btn-success btn-icon mg-r-5 mg-b-10 acc" data-id="' . $data->id . '" id="acc"><div><i class="fa fa-check"></i></div></button>
            <button class="btn btn-primary btn-icon mg-r-5 mg-b-10 detail" data-id="' . $data->id . '"><div><i class="fa fa-eye"></i></div></button></center>';
        return $update;
      })
      ->rawColumns(['action'])
      ->make(true);
  }

  public function detail($id)
  {
    $sewa = DB::table('sewa')
      ->join('users', 'sewa.userId', '=', 'users.id')
      ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
      ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
      ->select('sewa.*', 'users.name', 'users.address', 'users.noIdentitas', 'users.nohp', 'peminjaman_barang.jamPeminjaman', 'peminjaman_barang.tanggalPeminjaman', 'pengembalian_barang.tanggalPengembalian')
      ->where('sewa.status', '=', '1')
      ->where('peminjaman_barang.status_peminjaman', '=', '1')
      ->where('pengembalian_barang.status_pengembalian', '=', '1')
      ->where('sewa.id', $id)->first();

    $sewadet = DB::table('sewa_details')
      ->join('products', 'sewa_details.productId', '=', 'products.id')
      ->select('sewa_details.*', 'products.kode_barang')
      ->where('sewa_details.sewaId', $id)->get();

    return Response::json(array(
      'sewa' => $sewa,
      'sewa_detail' => $sewadet,
    ));
  }

  public function acc($id)
  {
    $pinjem = DB::table('peminjaman_barang')->where('sewaid', $id)->update([
      'status_peminjaman' => '2',
      'updated_at' => Carbon::now()
    ]);

    $ngembaliin = DB::table('pengembalian_barang')->where('sewaId', $id)->update([
      'status_pengembalian' => '2',
      'updated_at' => Carbon::now()
    ]);

    if ($pinjem == true && $ngembaliin == true) {
      return response()->json(['msg' => '1']);
    } else {
      return response()->json(['msg' => '0']);
    }
  }

  public function detail2($id)
  {
    $sewa = DB::table('sewa')
      ->join('users', 'sewa.userId', '=', 'users.id')
      ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
      ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
      ->select('sewa.*', 'users.name', 'users.address', 'users.noIdentitas', 'users.nohp', 'pengembalian_barang.jamPengembalian', 'peminjaman_barang.tanggalPeminjaman', 'pengembalian_barang.tanggalPengembalian')
      ->where('sewa.status', '=', '1')
      ->where('peminjaman_barang.status_peminjaman', '=', '2')
      ->where('pengembalian_barang.status_pengembalian', '=', '2')
      ->where('sewa.id', $id)->first();

    $sewadet = DB::table('sewa_details')
      ->join('products', 'sewa_details.productId', '=', 'products.id')
      ->select('sewa_details.*', 'products.kode_barang')
      ->where('sewa_details.sewaId', $id)->get();

    return Response::json(array(
      'sewa' => $sewa,
      'sewa_detail' => $sewadet,
    ));
  }

  public function acc2($id)
  {
    $sewa = DB::table('sewa')->where('id', $id)->update([
      'status' => '2',
      'updated_at' => Carbon::now()
    ]);
    $pinjem = DB::table('peminjaman_barang')->where('sewaId', $id)->update([
      'status_peminjaman' => '3',
      'updated_at' => Carbon::now()
    ]);

    $anu = DB::table('pengembalian_barang')->select('tanggalPengembalian', 'jamPengembalian')->where('sewaId', $id)->first();
    $awal  = strtotime($anu->tanggalPengembalian . ' ' . $anu->jamPengembalian . ':00'); //waktu awal
    $akhir = strtotime($anu->updated_at); //waktu akhir
    $diff  = $akhir - $awal;
    $jam   = floor($diff / (60 * 60));
    $denda = $jam * 5000;
    if($denda < 0) {
      $ngembaliin = DB::table('pengembalian_barang')->where('sewaId', $id)->update([
        'status_pengembalian' => '3',
        'tanggalAcc' => Carbon::now(),
        'denda' => '0',
        'updated_at' => Carbon::now()
      ]);
    } else {
      $ngembaliin = DB::table('pengembalian_barang')->where('sewaId', $id)->update([
        'status_pengembalian' => '3',
        'tanggalAcc' => Carbon::now(),
        'denda' => $denda,
        'updated_at' => Carbon::now()
      ]);
    }

    $sewadet = DB::table('sewa_details')
      ->join('products', 'sewa_details.productId', '=', 'products.id')
      ->select('sewa_details.productId', 'sewa_details.quantity')
      ->where('sewa_details.sewaId', $id)->get();

    foreach ($sewadet as $value) {
      $product = DB::table('products')->where('id', $value->productId)->update(['product_quantity' => DB::raw('(product_quantity +' . $value->quantity . ')')]);
    }

    if ($pinjem == true && $ngembaliin == true && $product == true) {
      return response()->json(['msg' => '1']);
    } else {
      return response()->json(['msg' => '0']);
    }
  }

  public function cetaknota($id)
  {
    $sewa = DB::table('sewa')
      ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
      ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
      ->select('sewa.*', 'pengembalian_barang.tanggalAcc')
      ->where('sewa.status', '=', '2')
      ->where('peminjaman_barang.status_peminjaman', '=', '3')
      ->where('pengembalian_barang.status_pengembalian', '=', '3')
      ->where('sewa.id', $id)->first();
    $sewadet = DB::table('sewa_details')
      ->join('products', 'sewa_details.productId', '=', 'products.id')
      ->select('sewa_details.*', 'products.kode_barang')
      ->where('sewa_details.sewaId', $id)->get();

    $pdf = PDF::loadview('adminowner.transaksi.nota_pdf', [
      'sewa' => $sewa,
      'sewadet' => $sewadet
    ]);
    return $pdf->download('nota-pembayaran');
  }
}
