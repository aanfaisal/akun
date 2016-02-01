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
        $dari=date('Y-m-d',strtotime($request->input('dari')));
        $sampai=date('Y-m-d',strtotime($request->input('sampai')));
        $laporanstok = \App\laporanstok::whereBetween('created_at', array($dari, $sampai))->get();
        return redirect('laporanstok.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $laporanstok_id
     *
     * @return Response
     */
    public function show($dari, $sampai)
    {
        //$laporanstok = laporanstok::findOrFail($laporanstok_id);
        //$dari=date('Y-m-d',strtotime($request->input('dari')));
        //$sampai=date('Y-m-d',strtotime($request->input('sampai')));
        //$laporanstok = \App\laporanstok::whereBetween('created_at', array($dari, $sampai))->get();
        return view('laporanstok.show', compact(''));
    }
}
