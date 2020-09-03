<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserSewaController extends Controller
{
    public function editSewa()
    {
        return view('pages.sewa.editSewa');
    }
}
