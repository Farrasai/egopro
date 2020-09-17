<?php

namespace App\Http\Controllers;

use App\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function info()
    {
        return view('pages.info.index');
    }

    public function product()
    {
        $products =  DB::table('products')->paginate(10);
        $categories = DB::table('categories')->get();
        return view('pages.product.allProduct', compact('products', 'categories'));
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

    public function productByCategories($id)
    {
        $products = DB::table('products')->where('category_id', $id)->paginate(5);
        $categories = DB::table('categories')->get();
        $categoryName = DB::table('categories')->where('id', $id)->first();
        return view('pages.product.byCategories', compact('products', 'categories', 'categoryName'));
    }

    public function search(Request $request)
    {
        $item = $request->search;
        $products = DB::table('products')
            ->where('product_name', 'LIKE', '%' . $item . '%')
            ->get();
        $categories = DB::table('categories')->get();
        // dd($categories);
        return view('pages.search.search', compact('products', 'categories'));
    }
}
