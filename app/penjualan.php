<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penjualans';
    protected $primaryKey = "penjualan_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nonota_id', 'barang_id', 'jumlah', 'harga', 'tanggal', 'total'];


    public function nonota()
    {
        return $this->belongsTo('App\nonota');
    }
    public function barang()
    {
        return $this->belongsTo('App\barang');
    }
    public function jurnalpenjualan()
    {
        return $this->hasMany('App\jurnalpenjualan');
    }
    public function penerimaanka()
    {
        return $this->hasMany('App\penerimaanka');
    }
}
