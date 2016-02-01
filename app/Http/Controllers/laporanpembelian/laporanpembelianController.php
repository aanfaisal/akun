<?php

namespace App\Http\Controllers\laporanpembelian;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use App\laporanpembelian;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class laporanpembelianController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$laporanpembelian = laporanpembelian::paginate(15);

        return view('laporanpembelian.index');// compact('laporanpembelian'));
    }

}
