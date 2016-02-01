<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.2/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        //$barang = DB::table('barangs')->where('barang_id');//->lists('nama', 'barang_id');
        //$penjualan = DB::table('penjualans')->where('penjualan_id');//->lists('penjualan_id', 'penjualan_id');
        //$user = DB::table('users')//->lists('id', 'id');
        //$id = DB::table('users')->lastInsertId();
        return view('home');//-with($id);//->with('barangs', $barang)
                           //->with('penjualans', $penjualan)
                           //->with('id', $user);
    }
}
