<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Response;
use Validator;
use Auth;
use PDF;


class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('adminowner.laporan.index');
    }

    public function getLaporan($tgl1, $tgl2)
    {
      $from = date($tgl1);
      $to = date($tgl2);
      $data = DB::table('sewa')
      ->join('users', 'sewa.userId', '=', 'users.id')
      ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
      ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
      ->join('sewa_details', 'sewa.id', '=', 'sewa_details.sewaId')
      ->select('sewa_details.*', 'sewa.id', 'sewa.kodeSewa' ,'users.name', 'pengembalian_barang.denda')
      ->where('sewa.status', '=', '2')
      ->where('peminjaman_barang.status_peminjaman', '=', '3')
      ->where('pengembalian_barang.status_pengembalian', '=', '3')
      ->whereBetween('pengembalian_barang.tanggalAcc', [$from, $to])
      ->get();

      return Datatables::of($data)
        ->addIndexColumn()
        ->editColumn("biayaSewa", function ($data) {
            return rupiah($data->biayaSewa);
        })
        ->editColumn("quantity", function ($data) {
            $new = $data->quantity . ' Buah';
            return $new;
        })
        ->editColumn("subBiayaSewa", function ($data) {
            return rupiah($data->subBiayaSewa);
        })
        ->editColumn("denda", function ($data) {
            if($data->denda == '0') {
                return 'Yes';
            } else {
                return 'No';
            }   
        })
        ->make(true);
    }

    public function excel($tgl1, $tgl2)
	{
        DB::statement(DB::raw("SET @row = '0'"));
        $from = date($tgl1);
        $to = date($tgl2);
        $data = DB::table('sewa')
        ->join('users', 'sewa.userId', '=', 'users.id')
        ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
        ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
        ->join('sewa_details', 'sewa.id', '=', 'sewa_details.sewaId')
        ->select(DB::raw("@row:=@row+1 AS no"),'sewa_details.*', 'sewa.id', 'sewa.kodeSewa' ,'users.name', 'pengembalian_barang.denda')
        ->where('sewa.status', '=', '2')
        ->where('peminjaman_barang.status_peminjaman', '=', '3')
        ->where('pengembalian_barang.status_pengembalian', '=', '3')
        ->whereBetween('pengembalian_barang.tanggalAcc', [$from, $to])
        ->get();

        $range = ['start'=>$from, 'end'=>$to];
        ob_end_clean(); // this
        ob_start(); // and this
		return Excel::download(new LaporanExport($data, $range),'Laporan-Data-'.date('Y-m-d H:i:s').'.xlsx');
    }
    
    public function pdf($tgl1, $tgl2)
	{
        DB::statement(DB::raw("SET @row = '0'"));
        $from = date($tgl1);
        $to = date($tgl2);
        $data = DB::table('sewa')
        ->join('users', 'sewa.userId', '=', 'users.id')
        ->join('peminjaman_barang', 'sewa.id', '=', 'peminjaman_barang.sewaId')
        ->join('pengembalian_barang', 'sewa.id', '=', 'pengembalian_barang.sewaId')
        ->join('sewa_details', 'sewa.id', '=', 'sewa_details.sewaId')
        ->select(DB::raw("@row:=@row+1 AS no"),'sewa_details.*', 'sewa.id', 'sewa.kodeSewa' ,'users.name', 'pengembalian_barang.denda')
        ->where('sewa.status', '=', '2')
        ->where('peminjaman_barang.status_peminjaman', '=', '3')
        ->where('pengembalian_barang.status_pengembalian', '=', '3')
        ->whereBetween('pengembalian_barang.tanggalAcc', [$from, $to])
        ->get();

        $range = ['start'=>$from, 'end'=>$to];
        $pdf = PDF::loadview('adminowner.laporan.pdf', [
            'data' => $data,
            'start' => $range['start'],
            'end' => $range['end']
          ]);
        return $pdf->download('Laporan-Data-'.date('Y-m-d H:i:s'));
	}
}
