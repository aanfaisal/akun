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
        return view('laporanpembelian.index');
    }

    public function search(Request $request)
    {
        $from = Carbon::parse($request->input('dari'))->format('Y-m-d'); // asumsi input tanggal menggunakan format d-m-Y
        $to = Carbon::parse($request->input('sampai'))->format('Y-m-d'); // asumsi input tanggal menggunakan format d-m-Y
        $laporanpembelians = \App\laporanpembelian::whereBetween('created_at', [$from, $to])->get();

        return view('laporanpembelian.search-list', array('laporanpembelians'=>$laporanpembelians));

    }
    public function create()
    {
        return view('laporanpembelian.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //$dari=date('Y-m-d',strtotime($request->input('dari')));
        //$sampai=date('Y-m-d',strtotime($request->input('sampai')));
        //$laporanpembelian = \App\laporanpembelian::whereBetween('created_at', array($dari, $sampai))->get();
        return redirect('laporanpembelian');//store/show/apa');
    }
}
