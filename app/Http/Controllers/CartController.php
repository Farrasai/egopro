<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;
use Auth;

class CartController extends Controller
{
    public function addCart(Request $request, $id)
    {
        $idUser = Auth::user()->id;
        $product = DB::table('products')->where('id', $id)->first();

        // $exp = $request->lamaSewa;
        // $pecah = explode(" ", $exp);
        // $lama = $pecah[0];

        $data = array();
        $data['id'] = $product->id;
        $data['name'] = $product->product_name;
        $data['qty'] = $request->product_quantity;
        $data['lamaSewa'] = $request->lamaSewa;
        $data['price'] = $product->price;
        $data['quality'] = $product->quality;
        $data['options']['image'] = $product->image;
        $data['options']['maxQty'] = $request->maxQty;
        $data['options']['jenis'] = $product->jenis;

        Cart::instance($idUser)->add($data);
        $notification = array(
            'message' => 'Product berhasil di tambahkan kedalam Cart',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function removeCart($rowId)
    {
        $idUser = Auth::user()->id;
        Cart::instance($idUser)->remove($rowId);
        $notification = array(
            'message' => 'Product dihapus dari Cart',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function updateCart(Request $request)
    {
        $idUser = Auth::user()->id;
        $rowId = $request->productId;

        $exp = $request->lamaSewa;
        $pecah = explode(" ", $exp);
        $lama = $pecah[0];

        $data = array();
        $data['qty'] = $request->qty;
        // $data['tanggalSewa'] = $request->tanggalSewa;
        // $data['tanggalPengembalian'] = $request->tanggalPengembalian;
        // $data['lamaSewa'] = $lama;

        $update = Cart::instance($idUser)->update($rowId, $data);
        if ($update) {
            $notification = array(
                'message' => 'Berhasil merubah Cart Product',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Tidak ada yang diubah',
                'alert-type' => 'warning'
            );
            return Redirect()->back()->with($notification);
        }
    }


    public function check()
    {
        $idUser = Auth::user()->id;
        $content = Cart::instance($idUser)->content();
        return response()->json($content);
    }

    public function showCart()
    {
        $check = Auth::check();
        if ($check) {
            $idUser = Auth::user()->id;
            $carts = Cart::instance($idUser)->content();

            $products = DB::table('products')->get();
            return view('pages.addtocart.showCart', compact('carts', 'products'));
        } else {
            return redirect('/login');
        }
    }
}
