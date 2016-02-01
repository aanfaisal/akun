<?php

namespace App\Http\Controllers\laporanpenjualan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use App\laporanpenjualan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class laporanpenjualanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$laporanpenjualan = laporanpenjualan::paginate(15);

        return view('laporanpenjualan.index', compact('laporanpenjualan'));
    }

}
