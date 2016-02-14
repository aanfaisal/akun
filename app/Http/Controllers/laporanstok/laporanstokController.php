<?php

namespace App\Http\Controllers\laporanstok;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use App\laporanstok;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class laporanstokController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('laporanstok.index');
    }

    public function search(Request $request)
    {
        $from = Carbon::parse($request->input('dari'))->format('Y-m-d'); // asumsi input tanggal menggunakan format d-m-Y
        $to = Carbon::parse($request->input('sampai'))->format('Y-m-d'); // asumsi input tanggal menggunakan format d-m-Y
        $laporanstoks = \App\laporanstok::whereBetween('created_at', [$from, $to])->get();

        return view('laporanstok.search-list', array('laporanstoks'=>$laporanstoks));

    }
    public function create()
    {
        return view('laporanstok.create');
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
        //$laporanstok = \App\laporanstok::whereBetween('created_at', array($dari, $sampai))->get();
        return redirect('laporanstok');//store/show/apa');
    }
}
