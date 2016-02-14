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
        return view('laporanpenjualan.index');
    }

    public function search(Request $request)
    {
        $from = Carbon::parse($request->input('dari'))->format('Y-m-d'); // asumsi input tanggal menggunakan format d-m-Y
        $to = Carbon::parse($request->input('sampai'))->format('Y-m-d'); // asumsi input tanggal menggunakan format d-m-Y
        $laporanpenjualans = \App\laporanpenjualan::whereBetween('created_at', [$from, $to])->get();

        return view('laporanpenjualan.search-list', array('laporanpenjualans'=>$laporanpenjualans));

    }
    public function create()
    {
        return view('laporanpenjualan.create');
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
        //$laporanpenjualan = \App\laporanpenjualan::whereBetween('created_at', array($dari, $sampai))->get();
        return redirect('laporanpenjualan');//store/show/apa');
    }
}
