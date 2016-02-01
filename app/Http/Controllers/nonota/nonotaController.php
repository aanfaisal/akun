<?php

namespace App\Http\Controllers\nonota;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\nonota;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class nonotaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $nonota = nonota::paginate(15);

        return view('nonota.index', compact('nonota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('nonota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', ]);

        nonota::create($request->all());

        Session::flash('flash_message', 'Nomor Nota Telah Ditambahkan!');

        return redirect('nonota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $nonota_id
     *
     * @return Response
     */
    public function show($nonota_id)
    {
        $nonota = nonota::findOrFail($nonota_id);

        return view('nonota.show', compact('nonota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $nonota_id
     *
     * @return Response
     */
    public function edit($nonota_id)
    {
        $nonota = nonota::findOrFail($nonota_id);

        return view('nonota.edit', compact('nonota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $nonota_id
     *
     * @return Response
     */
    public function update($nonota_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', ]);

        $nonota = nonota::findOrFail($nonota_id);
        $nonota->update($request->all());

        Session::flash('flash_message', 'Nomor Nota Telah Diupdate!');

        return redirect('nonota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $nonota_id
     *
     * @return Response
     */
    public function destroy($nonota_id)
    {
        nonota::destroy($nonota_id);

        Session::flash('flash_message', 'Nomor Nota Telah Dihapus!');

        return redirect('nonota');
    }

}
