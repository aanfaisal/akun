<?php

namespace App\Http\Controllers\penjualan;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\penjualan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class penjualanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $penjualan = penjualan::paginate(15);

        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $barang = DB::table('barangs')->lists('nama', 'barang_id');
        $nonota = DB::table('nonota')->lists('nama', 'nonota_id');
        return view('penjualan.create')->with('barangs', $barang)
                                    ->with('nonota', $nonota);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nonota_id' => 'required', 'barang_id' => 'required', 'jumlah' => 'required', 'harga' => 'required', ]);

        penjualan::create($request->all());

        Session::flash('flash_message', 'penjualan Telah Ditambahkan!');

        return redirect('penjualan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $penjualan_id
     *
     * @return Response
     */
    public function show($penjualan_id)
    {
        $penjualan = penjualan::findOrFail($penjualan_id);

        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $penjualan_id
     *
     * @return Response
     */
    public function edit($penjualan_id)
    {
        $penjualan = penjualan::findOrFail($penjualan_id);
        $barang = DB::table('barangs')->lists('nama', 'barang_id');
        $nonota = DB::table('nonota')->lists('nama', 'nonota_id');
        return view('penjualan.edit', compact('penjualan'))->with('barangs', $barang)
                                    ->with('nonota', $nonota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $penjualan_id
     *
     * @return Response
     */
    public function update($penjualan_id, Request $request)
    {
        $this->validate($request, ['nonota_id' => 'required', 'barang_id' => 'required', 'jumlah' => 'required', 'harga' => 'required', ]);

        $penjualan = penjualan::findOrFail($penjualan_id);
        $penjualan->update($request->all());

        Session::flash('flash_message', 'penjualan Telah Diupdate!');

        return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $penjualan_id
     *
     * @return Response
     */
    public function destroy($penjualan_id)
    {
        penjualan::destroy($penjualan_id);

        Session::flash('flash_message', 'penjualan Telah Dihapus!');

        return redirect('penjualan');
    }

}
