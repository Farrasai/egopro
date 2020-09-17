<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Carbon\Carbon;
use DB;
use Validator;
use Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function pemesananIndex()
    {
        return view('adminowner.transaksi.pengambilan');
    }
}
