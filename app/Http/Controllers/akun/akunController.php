<?php

namespace App\Http\Controllers\akun;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\akun;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class akunController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $akun = akun::paginate(15);

        return view('akun.index', compact('akun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('akun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'keterangan' => 'required', ]);

        akun::create($request->all());

        Session::flash('flash_message', 'akun Telah Ditambahkan!');

        return redirect('akun');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $akun_id
     *
     * @return Response
     */
    public function show($akun_id)
    {
        $akun = akun::findOrFail($akun_id);

        return view('akun.show', compact('akun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $akun_id
     *
     * @return Response
     */
    public function edit($akun_id)
    {
        $akun = akun::findOrFail($akun_id);

        return view('akun.edit', compact('akun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $akun_id
     *
     * @return Response
     */
    public function update($akun_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'keterangan' => 'required', ]);

        $akun = akun::findOrFail($akun_id);
        $akun->update($request->all());

        Session::flash('flash_message', 'akun Telah Diupdate!');

        return redirect('akun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $akun_id
     *
     * @return Response
     */
    public function destroy($akun_id)
    {
        akun::destroy($akun_id);

        Session::flash('flash_message', 'akun Telah Dihapus!');

        return redirect('akun');
    }

}
