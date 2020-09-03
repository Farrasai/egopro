<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('pages.product.allProduct');
    }

    public function productDetail()
    {
        return view('pages.product.detailProduct');
    }
}
