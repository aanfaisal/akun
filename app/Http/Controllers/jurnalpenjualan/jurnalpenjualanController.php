<?php

namespace App\Http\Controllers\jurnalpenjualan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jurnalpenjualan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class jurnalpenjualanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jurnalpenjualan = jurnalpenjualan::paginate(15);

        return view('jurnalpenjualan.index', compact('jurnalpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $nonota = DB::table('nonota')->lists('nama', 'nonota_id');
        $penjualan = DB::table('penjualans')->lists('penjualan_id', 'penjualan_id');
        $akun = DB::table('akuns')->lists('keterangan', 'akun_id');
        return view('jurnalpenjualan.create')->with('penjualans', $penjualan)
                                    ->with('nonota', $nonota)
                                    ->with('keterangan', $akun);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['penjualan_id' => 'required', 'nonota_id' => 'required', 'tgl_jurnal' => 'required', 'akun_id' => 'required', 'debet' => 'required', 'kredit' => 'required', ]);

        jurnalpenjualan::create($request->all());

        Session::flash('flash_message', 'jurnalpenjualan Telah Ditambahkan!');

        return redirect('jurnalpenjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $jurnalpenjualan_id
     *
     * @return Response
     */
    public function show($jurnalpenjualan_id)
    {
        $jurnalpenjualan = jurnalpenjualan::findOrFail($jurnalpenjualan_id);

        return view('jurnalpenjualan.show', compact('jurnalpenjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $jurnalpenjualan_id
     *
     * @return Response
     */
    public function edit($jurnalpenjualan_id)
    {
        $jurnalpenjualan = jurnalpenjualan::findOrFail($jurnalpenjualan_id);
        $nonota = DB::table('nonota')->lists('nama', 'nonota_id');
        $penjualan = DB::table('penjualans')->lists('penjualan_id', 'penjualan_id');
        $akun = DB::table('akuns')->lists('keterangan', 'akun_id');
        return view('jurnalpenjualan.edit', compact('jurnalpenjualan'))->with('penjualans', $penjualan)
                                    ->with('nonota', $nonota)
                                    ->with('keterangan', $akun);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $jurnalpenjualan_id
     *
     * @return Response
     */
    public function update($jurnalpenjualan_id, Request $request)
    {
        $this->validate($request, ['penjualan_id' => 'required', 'nonota_id' => 'required', 'tgl_jurnal' => 'required', 'akun_id' => 'required', 'debet' => 'required', 'kredit' => 'required', ]);

        $jurnalpenjualan = jurnalpenjualan::findOrFail($jurnalpenjualan_id);
        $jurnalpenjualan->update($request->all());

        Session::flash('flash_message', 'Jurnal Penjualan Telah Diupdate!');

        return redirect('jurnalpenjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $jurnalpenjualan_id
     *
     * @return Response
     */
    public function destroy($jurnalpenjualan_id)
    {
        jurnalpenjualan::destroy($jurnalpenjualan_id);

        Session::flash('flash_message', 'Jurnal Penjualan Telah Dihapus!');

        return redirect('jurnalpenjualan');
    }

}
