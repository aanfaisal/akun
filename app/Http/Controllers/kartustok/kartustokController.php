<?php

namespace App\Http\Controllers\kartustok;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\kartustok;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class kartustokController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $kartustok = kartustok::paginate(15);

        return view('kartustok.index', compact('kartustok'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $barang = DB::table('barangs')->lists('nama', 'barang_id');
        $jenis = DB::table('jenis')->lists('nama_jenis', 'jenis_id');
        return view('kartustok.create')->with('barang', $barang)
                                    ->with('jenis', $jenis);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['barang_id' => 'required', 'jenis_id' => 'required', 'stokawal' => 'required', 'masuk' => 'required', 'keluar' => 'required', 'stokakhir' => 'required', 'sisa' => 'required', 'harga' => 'required', 'hargabeli' => 'required', 'laba' => 'required', ]);

        kartustok::create($request->all());

        Session::flash('flash_message', 'kartustok Telah Ditambahkan!');

        return redirect('kartustok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $kartustok_id
     *
     * @return Response
     */
    public function show($kartustok_id)
    {
        $kartustok = kartustok::findOrFail($kartustok_id);

        return view('kartustok.show', compact('kartustok'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $kartustok_id
     *
     * @return Response
     */
    public function edit($kartustok_id)
    {
        $kartustok = kartustok::findOrFail($kartustok_id);
        $barang = DB::table('barangs')->lists('nama', 'barang_id');
        $jenis = DB::table('jenis')->lists('nama_jenis', 'jenis_id');
        return view('kartustok.edit', compact('kartustok'))->with('barang', $barang)
                                    ->with('jenis', $jenis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $kartustok_id
     *
     * @return Response
     */
    public function update($kartustok_id, Request $request)
    {
        $this->validate($request, ['barang_id' => 'required', 'jenis_id' => 'required', 'stokawal' => 'required', 'masuk' => 'required', 'keluar' => 'required', 'stokakhir' => 'required', 'sisa' => 'required', 'harga' => 'required', 'hargabeli' => 'required', 'laba' => 'required', ]);

        $kartustok = kartustok::findOrFail($kartustok_id);
        $kartustok->update($request->all());

        Session::flash('flash_message', 'kartustok Telah Diupdate!');

        return redirect('kartustok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $kartustok_id
     *
     * @return Response
     */
    public function destroy($kartustok_id)
    {
        kartustok::destroy($kartustok_id);

        Session::flash('flash_message', 'kartustok Telah Dihapus!');

        return redirect('kartustok');
    }

}
