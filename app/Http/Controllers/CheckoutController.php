<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        return view('pages.checkout.checkout');
    }


    public function final(Request $request)
    {
        $idUser = Auth::user()->id;
        $content = Cart::instance($idUser)->content();

        // dd($content);
        foreach ($content as $row) {
            $product = DB::table('products')->where('id', $row->id)->first();
            $data['product_quantity'] = $product->product_quantity - $row->qty;
            DB::table('products')->where('id', $row->id)->update($data);
        }

        if ($request->bayar === null) {
            $notification = array(
                'message' => 'Metode pembayaran harus di pilih',
                'alert-type' => 'warning'
            );
            return Redirect()->back()->with($notification);
        }

        $dataSewa = array();
        $dataSewa['kodeSewa'] = mt_rand(1000000, 9999999);
        $dataSewa['userId'] = $idUser;
        $dataSewa['totalBiayaSewa'] = $request->total;
        $dataSewa['pembayaran'] = $request->bayar;
        $dataSewa['status'] = 1;

        // dd($dataSewa);

        // Table Sewa
        $sewaId = DB::table('sewa')->insertGetId($dataSewa);

        // Table Sewa Details
        $dataSewaDetails = array();
        foreach ($content as $row) {
            $dataSewaDetails['sewaId'] = $sewaId;
            $dataSewaDetails['productId'] = $row->id;
            $dataSewaDetails['namaProduct'] = $row->name;
            $dataSewaDetails['quantity'] = $row->qty;
            $dataSewaDetails['tanggalSewa'] = $request->tanggalSewa;
            $dataSewaDetails['tanggalPengembalian'] = $request->tanggalPengembalian;
            $dataSewaDetails['lamaSewa'] = $request->lamaSewa;
            $dataSewaDetails['jamSewa'] = $request->jamSewa;
            $dataSewaDetails['jamPengembalian'] = $request->jamPengembalian;
            $dataSewaDetails['biayaSewa'] = $row->price;
            $dataSewaDetails['subBiayaSewa'] = $row->price * $row->qty;
            $dataSewaDetails['pembayaran'] = $request->bayar;

            // dd($dataSewaDetails);
            DB::table('sewa_details')->insert($dataSewaDetails);
        }
        // Table Peminjaman 
        $dataPeminjaman = array();
        $dataPeminjaman['sewaId'] =  $sewaId;
        $dataPeminjaman['userId'] =  $idUser;
        $dataPeminjaman['tanggalPeminjaman'] =  $request->tanggalSewa;
        $dataPeminjaman['jamPeminjaman'] =  $request->jamSewa;
        $dataPeminjaman['status_peminjaman'] = 1;
        DB::table('peminjaman_barang')->insert($dataPeminjaman);

        // dd($dataPeminjaman);
        // Table Pengembalian
        $dataPengembalian = array();
        $dataPengembalian['sewaId'] =  $sewaId;
        $dataPengembalian['userId'] =  $idUser;
        $dataPengembalian['tanggalPengembalian'] =   $request->tanggalPengembalian;
        $dataPengembalian['jamPengembalian'] = $request->jamPengembalian;
        $dataPengembalian['status_pengembalian'] = 1;
        DB::table('pengembalian_barang')->insert($dataPengembalian);

        // dd($dataPeminjaman);
        if ($request->bayar == 1) {
            Cart::instance($idUser)->destroy();
            $notification = array(
                'message' => 'Berhasil Menyewa, karena anda memilih jenis pembayaran DP silahkan kirimkan bukti transfer pada menu sewa barang',
                'alert-type' => 'success'
            );
            return Redirect()->to('/')->with($notification);
        } else {
            Cart::instance($idUser)->destroy();
            $notification = array(
                'message' => 'Berhasil Menyewa',
                'alert-type' => 'success'
            );
            return Redirect()->to('/')->with($notification);
        }
    }
}
