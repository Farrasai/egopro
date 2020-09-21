<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use DB;
use Validator;
use Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
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

        return view('adminowner.product.index', compact('unikode'));
    }

    public function edit($id) {
        $productedit =  DB::table('products')->where('id', $id)->get();
        return json_encode($productedit);
    }

    public function delete($id) {
        DB::table('products')->where('id', $id)->delete();
        return response()->json(['msg'=>'1']);
    }

    public function getCategory() {
        $categories =  DB::table('categories')->get();
        return json_encode($categories);
    }

    public function getAllProduct()
    {
        $data = DB::table('products')->get();
        return Datatables::of($data)
            ->editColumn("price", function ($data) {
                return rupiah($data->price);
            })
            ->addColumn('action', function ($data) {
                $update = '<center><button class="btn btn-primary btn-icon mg-r-5 mg-b-10 edit" data-id="'. $data->id .'" id="edit"><div><i class="fa fa-pencil"></i></div></button>
                <button class="btn btn-danger btn-icon mg-r-5 mg-b-10 del" data-id="'. $data->id .'"><div><i class="fa fa-trash"></i></div></button></center>';
                return $update;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function tambah(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'barang' => 'required',
            'jenis' => 'required',
            'kode' => 'required',
            'harga' => 'required',
            'stock' => 'required',
            'keterangan' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->passes()) {
            $input = $request->all();
            $file = $request->gambar->getClientOriginalName(); //Get Image Name
            $input['gambar'] = $file;
            $request->gambar->move(public_path('media/products/'), $input['gambar']);
            DB::table('products')->insert([
                'category_id' => $request->kategori,
                'product_name' => $request->barang,
                'jenis' => $request->jenis,
                'kode_barang' => $request->kode,
                'price' => $request->harga,
                'product_quantity' => $request->stock,
                'quality' => $request->kualitas,
                'product_detail' => $request->keterangan,
                'image' => 'media/products/' . $input['gambar'],
                'created_at' => Carbon::now()
            ]);
            
            return response()->json(['msg'=>'1']);
        }

        return response()->json(['error'=>$validator->errors()->all(),'msg'=>'0']);
        
    }

    public function update(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'barangid' => 'required',
            'baranged' => 'required',
            'jenised' => 'required',
            'kodeed' => 'required',
            'hargaed' => 'required',
            'stocked' => 'required',
            'keteranganed' => 'required',
            'kategoried' => 'required',
            'gambared' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($validator->passes()) {
            $input = $request->all();
            if(!empty($request->gambared)) {
                $file = $request->gambared->getClientOriginalName(); //Get Image Name
                $input['gambared'] = $file;
                $request->gambared->move(public_path('media/products/'), $input['gambared']);
                DB::table('products')->where('id', $request->barangid)->update([
                    'category_id' => $request->kategoried,
                    'product_name' => $request->baranged,
                    'jenis' => $request->jenised,
                    'kode_barang' => $request->kodeed,
                    'price' => $request->hargaed,
                    'product_quantity' => $request->stocked,
                    'quality' => $request->kualitased,
                    'product_detail' => $request->keteranganed,
                    'image' => 'media/products/' . $input['gambared'],
                    'updated_at' => Carbon::now()
                ]);
                
                return response()->json(['msg'=>'1']);
            } else {
                DB::table('products')->where('id', $request->barangid)->update([
                    'category_id' => $request->kategoried,
                    'product_name' => $request->baranged,
                    'jenis' => $request->jenised,
                    'kode_barang' => $request->kodeed,
                    'price' => $request->hargaed,
                    'product_quantity' => $request->stocked,
                    'quality' => $request->kualitased,
                    'product_detail' => $request->keteranganed,
                    'updated_at' => Carbon::now()
                ]);
                
                return response()->json(['msg'=>'1']);
            }
            
        }

        return response()->json(['error'=>$validator->errors()->all()]);
        
    }
}
