<?php

namespace App\Http\Controllers\pembelian;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\pembelian;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class pembelianController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $pembelian = pembelian::paginate(15);

        return view('pembelian.index', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $supplaier = DB::table('supplaiers')->lists('nama', 'supplaier_id');
        $barang = DB::table('barangs')->lists('nama', 'barang_id');
        return view('pembelian.create')->with('supplaiers', $supplaier)
                                        ->with('barangs', $barang);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['supplaier_id' => 'required', 'tanggal' => 'required', 'barang_id' => 'required', 'jumlah' => 'required', 'harga' => 'required', 'totalpembelian' => 'required', 'statusutang' => 'required', ]);

        pembelian::create($request->all());

        Session::flash('flash_message', 'Pembelian Telah Ditambahkan!');

        return redirect('pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $pembelian_id
     *
     * @return Response
     */
    public function show($pembelian_id)
    {
        $pembelian = pembelian::findOrFail($pembelian_id);

        return view('pembelian.show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $pembelian_id
     *
     * @return Response
     */
    public function edit($pembelian_id)
    {
        $pembelian = pembelian::findOrFail($pembelian_id);
        $supplaier = DB::table('supplaiers')->lists('nama', 'supplaier_id');
        $barang = DB::table('barangs')->lists('nama', 'barang_id');
        return view('pembelian.edit', compact('pembelian'))->with('supplaiers', $supplaier)
                                                        ->with('barangs', $barang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $pembelian_id
     *
     * @return Response
     */
    public function update($pembelian_id, Request $request)
    {
        $this->validate($request, ['supplaier_id' => 'required', 'tanggal' => 'required', 'barang_id' => 'required', 'jumlah' => 'required', 'harga' => 'required', 'totalpembelian' => 'required', 'statusutang' => 'required', ]);

        $pembelian = pembelian::findOrFail($pembelian_id);
        $pembelian->update($request->all());

        Session::flash('flash_message', 'Pembelian Telah Diupdate!');

        return redirect('pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $pembelian_id
     *
     * @return Response
     */
    public function destroy($pembelian_id)
    {
        pembelian::destroy($pembelian_id);

        Session::flash('flash_message', 'Pembelian Telah Dihapus!');

        return redirect('pembelian');
    }

}
