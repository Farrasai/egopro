<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $products =  DB::table('products')->get();
        return view('pages.product.allProduct', compact('products'));
    }

    public function productDetail($id, $product_name)
    {
        $product =  DB::table('products')
            ->join('categories', 'products.category_id', 'categories.id')
            ->select('products.*', 'categories.category_name')
            ->where('products.id', $id)
            ->first();
        return view('pages.product.detailProduct', compact('product'));
    }
}
