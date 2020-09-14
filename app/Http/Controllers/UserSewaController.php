<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;
use Response;

class UserSewaController extends Controller
{
    public function editSewa()
    {
        return view('pages.sewa.editSewa');
    }

    public function peminjaman()
    {
        $peminjaman = DB::table('sewa')
            ->join('peminjaman_barang', 'sewa.id', 'peminjaman_barang.sewaId')
            ->select('sewa.*', 'peminjaman_barang.tanggalPeminjaman', 'peminjaman_barang.jamPeminjaman', 'peminjaman_barang.sewaId', 'peminjaman_barang.status_peminjaman')
            ->where('sewa.userId', Auth::id())
            // ->where('sewa.status', 1 && 2)
            ->orderBy('sewa.id', 'DESC')
            ->paginate(5);
        return view('pages.sewa.peminjaman', compact('peminjaman'));
    }

    public function pengembalian()
    {
        $pengembalian = DB::table('sewa')
            ->join('pengembalian_barang', 'sewa.id', 'pengembalian_barang.sewaId')
            ->select('sewa.*', 'pengembalian_barang.tanggalPengembalian', 'pengembalian_barang.jamPengembalian', 'pengembalian_barang.sewaId', 'pengembalian_barang.status_pengembalian')
            ->where('sewa.userId', Auth::id())
            ->orderBy('sewa.id', 'DESC')
            ->get();
        return view('pages.sewa.pengembalian', compact('pengembalian'));
    }

    public function invoicePeminjaman($id, $sewaId)
    {
        $peminjam = DB::table('peminjaman_barang')
            ->join('users', 'peminjaman_barang.userId', 'users.id')
            ->join('sewa', 'peminjaman_barang.sewaId', 'sewa.id')
            ->select('peminjaman_barang.*', 'users.name', 'users.email', 'users.address', 'users.nohp', 'sewa.kodeSewa')
            ->where('peminjaman_barang.sewaId', $sewaId)
            ->get();

        $barang = DB::table('sewa_details')
            ->join('sewa', 'sewa_details.sewaId', 'sewa.id')
            ->join('users', 'sewa.userId', 'users.id')
            ->join('products', 'sewa_details.productId', 'products.id')
            ->select('sewa_details.*', 'sewa.*', 'users.id', 'products.kode_barang')
            ->where('sewa_details.sewaId', $sewaId)
            ->get();

        // dd($barang);
        // return view('pages.sewa.invoiceSewa', compact('peminjam', 'barang'));
        $pdf = PDF::loadview('pages.sewa.invoiceSewa', compact('peminjam', 'barang'))->setPaper('a4', 'landscape');
        return $pdf->download('invoice-sewa.pdf');
    }

    public function showUploadBukti($kodeSewa)
    {
        $detailSewa = DB::table('sewa')->where('kodeSewa', $kodeSewa)->first();
        if ($detailSewa->pembayaran == 2 || $detailSewa->bukti_pembayaran) {
            return redirect()->back();
        } else {
            $harga_str = preg_replace("/[^0-9]/", "", $detailSewa->totalBiayaSewa);
            $bayarDP =  $harga_str / 2;

            return response::json(array(
                'detailSewa' => $detailSewa,
                'bayarDP' => $bayarDP
            ));
            // return view('pages.sewa.uploadBukti', compact('detailSewa', 'bayarDP'));
        }
    }

    public function upload(Request $request)
    {
        $kodeSewa = $request->kodeSewa;
        $data['nominal_DP'] = $request->nominal_dp;
        $buktiPembayaran = $request->file('bukti_pembayaran');

        if ($buktiPembayaran) {
            $buktiPembayaranName = date('dmy_H_s_i');
            $extension = strtolower($buktiPembayaran->getClientOriginalExtension());
            $buktiPembayaranFullName = $buktiPembayaranName . '.' . $extension;
            $upload_path = 'media/bukti_pembayaran/';
            $image_url = $upload_path . $buktiPembayaranFullName;
            $success = $buktiPembayaran->move($upload_path, $buktiPembayaranFullName);
            $data['bukti_pembayaran'] = $image_url;

            $update = DB::table('sewa')->where('kodeSewa', $kodeSewa)->update($data);
            $notification = array(
                'message' => 'Berhasil upload bukti pembayaran',
                'alert-type' => 'success'
            );
            return redirect('user/sewa/peminjaman')->with($notification);
        } else {
            $notification = array(
                'message' => 'Bukti pembayaran belum di inputkan',
                'alert-type' => 'warning'
            );
            return back()->with($notification);
        }
    }

    public function riwayatSewaDetail($kodeSewa)
    {
        $dataDetail = DB::table('sewa')
            ->join('sewa_details', 'sewa.id', 'sewa_details.sewaId')
            ->join('products', 'sewa_details.productId', 'products.id')
            ->select('sewa.*', 'sewa_details.*', 'products.*')
            ->where('sewa.kodeSewa', $kodeSewa)
            ->get();
        // return view('pages.sewa.detailRiwayatSewa', compact('dataDetail'));
        return response::json(array(
            'dataDetail' => $dataDetail,
        ));
    }

    public function batalSewa($kodeSewa)
    {
        $sewaProduct = DB::table('sewa')
            ->join('sewa_details', 'sewa.Id', 'sewa_details.sewaId')
            ->select('sewa.*', 'sewa_details.*')
            ->where('sewa.kodeSewa', $kodeSewa)
            ->get();
        foreach ($sewaProduct as $row) {
            $product = DB::table('products')->where('id', $row->productId)->first();
            $data['product_quantity'] = $product->product_quantity + $row->quantity;
            DB::table('products')->where('id', $row->productId)->update($data);
        }
        DB::table('sewa')->where('kodeSewa', $kodeSewa)->delete();
        $notification = array(
            'message' => 'Berhasil membatalkan sewa',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function showUbahSewa($kodeSewa)
    {
        $productSewa = DB::table('sewa')
            ->join('peminjaman_barang', 'sewa.id', 'peminjaman_barang.sewaId')
            ->join('pengembalian_barang', 'sewa.id', 'pengembalian_barang.sewaId')
            ->where('sewa.kodeSewa', $kodeSewa)
            ->get();
        // dd($productSewa);
        $barangSewa = DB::table('sewa')
            ->join('sewa_details', 'sewa.id', 'sewa_details.sewaId')
            ->join('products', 'sewa_details.productId', 'products.id')
            ->where('sewa.kodeSewa', $kodeSewa)
            ->get();
        // dd($barangSewa);
        return view('pages.sewa.ubahSewa', compact('productSewa', 'barangSewa'));
    }

    public function ubahSewa(Request $request)
    {
        $kodeSewa = $request->kodeSewa;
        $getId = DB::table('sewa')->where('kodeSewa', $kodeSewa)->first();

        // Table Sewa
        $dataSewa = array();
        $dataSewa['totalBiayaSewa'] = $request->total;
        $dataSewa['pembayaran'] = $request->bayar;
        DB::table('sewa')->where('kodeSewa', $kodeSewa)->update($dataSewa);


        // Table Sewa Details
        $dataSewaDetail = array();
        $dataSewaDetail['tanggalSewa'] = $request->tanggalSewa;
        $dataSewaDetail['tanggalPengembalian'] = $request->tanggalPengembalian;
        $dataSewaDetail['lamaSewa'] = $request->lamaSewa;
        $dataSewaDetail['jamSewa'] = $request->jamSewa;
        $dataSewaDetail['jamPengembalian'] = $request->jamPengembalian;
        DB::table('sewa_details')->where('sewaId', $getId->id)->update($dataSewaDetail);

        // Table Peminjaman
        $dataPeminjaman = array();
        $dataPeminjaman['tanggalPeminjaman'] = $request->tanggalSewa;
        $dataPeminjaman['jamPeminjaman'] = $request->jamSewa;
        DB::table('peminjaman_barang')->where('sewaId', $getId->id)->update($dataPeminjaman);

        // Table Pengembalian
        $dataPengembalian = array();
        $dataPengembalian['tanggalPengembalian'] = $request->tanggalPengembalian;
        $dataPengembalian['jamPengembalian'] = $request->jamPengembalian;
        DB::table('pengembalian_barang')->where('sewaId', $getId->id)->update($dataPengembalian);

        $notification = array(
            'message' => 'Berhasil mengubah sewa',
            'alert-type' => 'success'
        );
        return redirect('user/sewa/peminjaman')->with($notification);

        // dd($kodeSewa);
    }
}
