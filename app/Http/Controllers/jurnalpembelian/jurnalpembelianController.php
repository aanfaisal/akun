<?php

namespace App\Http\Controllers\jurnalpembelian;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jurnalpembelian;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class jurnalpembelianController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jurnalpembelian = jurnalpembelian::paginate(15);

        return view('jurnalpembelian.index', compact('jurnalpembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $pembelian = DB::table('pembelians')->lists('pembelian_id', 'pembelian_id');
        $supplaier = DB::table('supplaiers')->lists('nama', 'supplaier_id');
        return view('jurnalpembelian.create')->with('pembelians', $pembelian)
                                    ->with('supplaiers', $supplaier);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['pembelian_id' => 'required', 'supplaier_id' => 'required', 'tgl_jurnal' => 'required', 'tgl_bayar' => 'required', 'akun_id' => 'required', 'debet' => 'required', 'kredit' => 'required', ]);

        jurnalpembelian::create($request->all());

        Session::flash('flash_message', 'jurnalpembelian Telah Ditambahkan!');

        return redirect('jurnalpembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $jurnalpembelian_id
     *
     * @return Response
     */
    public function show($jurnalpembelian_id)
    {
        $jurnalpembelian = jurnalpembelian::findOrFail($jurnalpembelian_id);

        return view('jurnalpembelian.show', compact('jurnalpembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $jurnalpembelian_id
     *
     * @return Response
     */
    public function edit($jurnalpembelian_id)
    {
        $jurnalpembelian = jurnalpembelian::findOrFail($jurnalpembelian_id);
        $pembelian = DB::table('pembelians')->lists('pembelian_id', 'pembelian_id');
        $supplaier = DB::table('supplaiers')->lists('nama', 'supplaier_id');
        return view('jurnalpembelian.edit', compact('jurnalpembelian'))->with('pembelians', $pembelian)
                                    ->with('supplaiers', $supplaier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $jurnalpembelian_id
     *
     * @return Response
     */
    public function update($jurnalpembelian_id, Request $request)
    {
        $this->validate($request, ['pembelian_id' => 'required', 'supplaier_id' => 'required', 'tgl_jurnal' => 'required', 'tgl_bayar' => 'required', 'akun_id' => 'required', 'debet' => 'required', 'kredit' => 'required', ]);

        $jurnalpembelian = jurnalpembelian::findOrFail($jurnalpembelian_id);
        $jurnalpembelian->update($request->all());

        Session::flash('flash_message', 'Jurnal Pembelian Telah Diupdate!');

        return redirect('jurnalpembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $jurnalpembelian_id
     *
     * @return Response
     */
    public function destroy($jurnalpembelian_id)
    {
        jurnalpembelian::destroy($jurnalpembelian_id);

        Session::flash('flash_message', 'Jurnal Pembelian Telah Dihapus!');

        return redirect('jurnalpembelian');
    }

}
