<?php

namespace App\Http\Controllers\barang;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\barang;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class barangController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $barang = barang::paginate(15);

        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $kategori = DB::table('kategori')->lists('kategori', 'kategori_id');
        $jenis = DB::table('jenis')->lists('nama_jenis', 'jenis_id');
        $satuan = DB::table('satuan')->lists('nama_sat', 'satuan_id');
        $merk = DB::table('merk')->lists('namamerk', 'merk_id');
        return view('barang.create')->with('kategori', $kategori)
                                    ->with('jenis', $jenis)
                                    ->with('satuan', $satuan)
                                    ->with('merk', $merk);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['kategori_id' => 'required', 'jenis_id' => 'required', 'merk_id' => 'required', 'satuan_id' => 'required', 'nama' => 'required', 'stok' => 'required', 'konversi' => 'required', ]);

        barang::create($request->all());

        Session::flash('flash_message', 'barang Telah Ditambahkan!');

        return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $barang_id
     *
     * @return Response
     */
    public function show($barang_id)
    {
        $barang = barang::findOrFail($barang_id);
        $kategori = DB::table('kategori')->lists('kategori', 'kategori_id');
        $jenis = DB::table('jenis')->lists('nama_jenis', 'jenis_id');
        $satuan = DB::table('satuan')->lists('nama_sat', 'satuan_id');
        $merk = DB::table('merk')->lists('namamerk', 'merk_id');
        return view('barang.show', compact('barang'))
                                    ->with('kategori', $kategori)
                                    ->with('jenis', $jenis)
                                    ->with('satuan', $satuan)
                                    ->with('merk', $merk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $barang_id
     *
     * @return Response
     */
    public function edit($barang_id)
    {
        $barang = barang::findOrFail($barang_id);

        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $barang_id
     *
     * @return Response
     */
    public function update($barang_id, Request $request)
    {
        $this->validate($request, ['kategori_id' => 'required', 'jenis_id' => 'required', 'merk_id' => 'required', 'satuan_id' => 'required', 'nama' => 'required', 'stok' => 'required', 'konversi' => 'required', ]);

        $barang = barang::findOrFail($barang_id);
        $barang->update($request->all());

        Session::flash('flash_message', 'barang Telah Diupdate!');

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $barang_id
     *
     * @return Response
     */
    public function destroy($barang_id)
    {
        barang::destroy($barang_id);

        Session::flash('flash_message', 'barang Telah Dihapus!');

        return redirect('barang');
    }

}
