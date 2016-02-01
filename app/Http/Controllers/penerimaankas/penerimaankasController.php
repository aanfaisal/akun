<?php

namespace App\Http\Controllers\penerimaankas;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\penerimaanka;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class penerimaankasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $penerimaankas = penerimaanka::paginate(15);

        return view('penerimaankas.index', compact('penerimaankas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $penjualan = DB::table('penjualans')->lists('penjualan_id', 'penjualan_id');
        $nonota = DB::table('nonota')->lists('nama', 'nonota_id');
        return view('penerimaankas.create')->with('penjualans', $penjualan)
                                    ->with('nonota', $nonota);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['penjualan_id' => 'required', 'nonota_id' => 'required', 'tgl_jurnal' => 'required', ]);

        penerimaanka::create($request->all());

        Session::flash('flash_message', 'penerimaanka Telah Ditambahkan!');

        return redirect('penerimaankas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $penerimaankas_id
     *
     * @return Response
     */
    public function show($penerimaankas_id)
    {
        $penerimaanka = penerimaanka::findOrFail($penerimaankas_id);

        return view('penerimaankas.show', compact('penerimaanka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $penerimaankas_id
     *
     * @return Response
     */
    public function edit($penerimaankas_id)
    {
        $penerimaanka = penerimaanka::findOrFail($penerimaankas_id);
        $penjualan = DB::table('penjualans')->lists('penjualan_id', 'penjualan_id');
        $nonota = DB::table('nonota')->lists('nama', 'nonota_id');
        return view('penerimaankas.edit', compact('penerimaanka'))->with('penjualans', $penjualan)
                                    ->with('nonota', $nonota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $penerimaankas_id
     *
     * @return Response
     */
    public function update($penerimaankas_id, Request $request)
    {
        $this->validate($request, ['penjualan_id' => 'required', 'nonota_id' => 'required', 'tgl_jurnal' => 'required', ]);

        $penerimaanka = penerimaanka::findOrFail($penerimaankas_id);
        $penerimaanka->update($request->all());

        Session::flash('flash_message', 'penerimaanka Telah Diupdate!');

        return redirect('penerimaankas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $penerimaankas_id
     *
     * @return Response
     */
    public function destroy($penerimaankas_id)
    {
        penerimaanka::destroy($penerimaankas_id);

        Session::flash('flash_message', 'penerimaanka Telah Dihapus!');

        return redirect('penerimaankas');
    }

}
