<?php

namespace App\Http\Controllers\pengeluarankas;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pengeluaranka;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class pengeluarankasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pengeluarankas = pengeluaranka::paginate(15);

        return view('pengeluarankas.index', compact('pengeluarankas'));
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
        $akun = DB::table('akuns')->lists('keterangan', 'akun_id');
        return view('pengeluarankas.create')->with('pembelians', $pembelian)
                                    ->with('supplaiers', $supplaier)
                                    ->with('keterangan', $akun);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['pembelian_id' => 'required', 'supplaier_id' => 'required', 'tgl_jurnal' => 'required', 'debet_utang' => 'required', 'debet_pembelian' => 'required', 'kreditkas' => 'required', ]);

        pengeluaranka::create($request->all());

        Session::flash('flash_message', 'pengeluaranka Telah Ditambahkan!');

        return redirect('pengeluarankas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pengeluarankas_id
     *
     * @return Response
     */
    public function show($pengeluarankas_id)
    {
        $pengeluaranka = pengeluaranka::findOrFail($pengeluarankas_id);

        return view('pengeluarankas.show', compact('pengeluaranka'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pengeluarankas_id
     *
     * @return Response
     */
    public function edit($pengeluarankas_id)
    {
        $pengeluaranka = pengeluaranka::findOrFail($pengeluarankas_id);
        $pembelian = DB::table('pembelians')->lists('pembelian_id', 'pembelian_id');
        $supplaier = DB::table('supplaiers')->lists('nama', 'supplaier_id');
        $akun = DB::table('akuns')->lists('keterangan', 'akun_id');
        return view('pengeluarankas.edit', compact('pengeluaranka'))->with('pembelians', $pembelian)
                                    ->with('supplaiers', $supplaier)
                                    ->with('keterangan', $akun);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $pengeluarankas_id
     *
     * @return Response
     */
    public function update($pengeluarankas_id, Request $request)
    {
        $this->validate($request, ['pembelian_id' => 'required', 'supplaier_id' => 'required', 'tgl_jurnal' => 'required', 'debet_utang' => 'required', 'debet_pembelian' => 'required', 'kreditkas' => 'required', ]);

        $pengeluaranka = pengeluaranka::findOrFail($pengeluarankas_id);
        $pengeluaranka->update($request->all());

        Session::flash('flash_message', 'pengeluaranka Telah Diupdate!');

        return redirect('pengeluarankas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pengeluarankas_id
     *
     * @return Response
     */
    public function destroy($pengeluarankas_id)
    {
        pengeluaranka::destroy($pengeluarankas_id);

        Session::flash('flash_message', 'pengeluaranka Telah Dihapus!');

        return redirect('pengeluarankas');
    }

}
