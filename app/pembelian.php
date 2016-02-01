<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pembelians';
    protected $primaryKey = "pembelian_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['supplaier_id', 'tanggal', 'barang_id', 'jumlah', 'harga', 'status', 'tgl_jatuhtempo', 'totalpembelian', 'statusutang'];

    public function supplaier()
    {
        return $this->belongsTo('App\supplaier');
    }

    public function pengeluaranka()
    {
        return $this->hasMany('App\pengeluaranka');
    }
    public function barang()
    {
        return $this->belongsTo('App\barang');
    }

    public function jurnalpembelian()
    {
        return $this->hasMany ('App\jurnalpembelian');
    }
}
