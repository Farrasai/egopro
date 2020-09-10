<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Cache;
use DB;
use Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $products =  DB::table('products')->get();
        $last_row =  DB::table('products')->select('kode_barang')->orderBy('id', 'DESC')->first();
        
        $number = intval(substr($last_row->kode_barang,-1)) + 1;
        if ($number < 10)
        {
            $unikode = "BRG00" . strval($number);
        } 
        else if ($number >= 10 && $number < 100)
        {
            $unikode = "BRG0" . strval($number);
        }
        else 
        {
            $unikode = "BRG" . strval($number);
        }

        return view('adminowner.product.index', compact('products', 'unikode'));
    }

    public function edit($id) {
        $productedit =  DB::table('products')->where('id', $id)->get();
        return json_encode($productedit);
    }

    public function getAllProduct()
    {
        $data = DB::table('products')->get();
        return Datatables::of($data)
            ->addColumn('action', function ($data) {
                $update = '<button class="btn btn-primary btn-icon mg-r-5 mg-b-10 edit" data-id="'. $data->id .'" id="edit"><div><i class="fa fa-pencil"></i></div></button>
                <button class="btn btn-danger btn-icon mg-r-5 mg-b-10 del" data-id="'. $data->id .'"><div><i class="fa fa-trash"></i></div></button>';
                return $update;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
