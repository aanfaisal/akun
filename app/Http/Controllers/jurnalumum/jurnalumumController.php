<?php

namespace App\Http\Controllers\jurnalumum;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\jurnalumum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class jurnalumumController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $jurnalumum = jurnalumum::paginate(15);

        return view('jurnalumum.index', compact('jurnalumum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $akun = DB::table('akuns')->lists('keterangan', 'akun_id');
        return view('jurnalumum.create')->with('keterangan', $akun);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['tgl_jurnal' => 'required', 'akun_id' => 'required', 'debet' => 'required', 'kredit' => 'required', 'ket_jurnal' => 'required', 'ref' => 'required', ]);

        jurnalumum::create($request->all());

        Session::flash('flash_message', 'jurnalumum Telah Ditambahkan!');

        return redirect('jurnalumum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $jurnalumum_id
     *
     * @return Response
     */
    public function show($jurnalumum_id)
    {
        $jurnalumum = jurnalumum::findOrFail($jurnalumum_id);

        return view('jurnalumum.show', compact('jurnalumum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $jurnalumum_id
     *
     * @return Response
     */
    public function edit($jurnalumum_id)
    {
        $jurnalumum = jurnalumum::findOrFail($jurnalumum_id);
        $akun = DB::table('akuns')->lists('keterangan', 'akun_id');
        return view('jurnalumum.edit', compact('jurnalumum'))->with('keterangan', $akun);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $jurnalumum_id
     *
     * @return Response
     */
    public function update($jurnalumum_id, Request $request)
    {
        $this->validate($request, ['tgl_jurnal' => 'required', 'akun_id' => 'required', 'debet' => 'required', 'kredit' => 'required', 'ket_jurnal' => 'required', 'ref' => 'required', ]);

        $jurnalumum = jurnalumum::findOrFail($jurnalumum_id);
        $jurnalumum->update($request->all());

        Session::flash('flash_message', 'jurnalumum Telah Diupdate!');

        return redirect('jurnalumum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $jurnalumum_id
     *
     * @return Response
     */
    public function destroy($jurnalumum_id)
    {
        jurnalumum::destroy($jurnalumum_id);

        Session::flash('flash_message', 'jurnalumum Telah Dihapus!');

        return redirect('jurnalumum');
    }

}
