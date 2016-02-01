<?php

namespace App\Http\Controllers\supplaier;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\supplaier;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class supplaierController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $supplaier = supplaier::paginate(15);

        return view('supplaier.index', compact('supplaier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('supplaier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'alamat' => 'required', ]);

        supplaier::create($request->all());

        Session::flash('flash_message', 'supplaier Telah Ditambahkan!');

        return redirect('supplaier');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $supplaier_id
     *
     * @return Response
     */
    public function show($supplaier_id)
    {
        $supplaier = supplaier::findOrFail($supplaier_id);

        return view('supplaier.show', compact('supplaier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $supplaier_id
     *
     * @return Response
     */
    public function edit($supplaier_id)
    {
        $supplaier = supplaier::findOrFail($supplaier_id);

        return view('supplaier.edit', compact('supplaier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $supplaier_id
     *
     * @return Response
     */
    public function update($supplaier_id, Request $request)
    {
        $this->validate($request, ['nama' => 'required', 'alamat' => 'required', ]);

        $supplaier = supplaier::findOrFail($supplaier_id);
        $supplaier->update($request->all());

        Session::flash('flash_message', 'supplaier Telah Diupdate!');

        return redirect('supplaier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $supplaier_id
     *
     * @return Response
     */
    public function destroy($supplaier_id)
    {
        supplaier::destroy($supplaier_id);

        Session::flash('flash_message', 'supplaier Telah Dihapus!');

        return redirect('supplaier');
    }

}
