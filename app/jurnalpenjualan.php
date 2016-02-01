<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurnalpenjualan extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jurnalpenjualans';
    protected $primaryKey = "jurnalpenjualan_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['penjualan_id', 'nonota_id', 'tgl_jurnal', 'akun_id', 'debet', 'kredit', 'ket_jurnal', 'ref'];

    public function akun()
    {
        return $this->belongsTo('App\akun');
    }
    public function nonota()
    {
        return $this->belongsTo('App\nonota');
    }
    public function penjualan()
    {
        return $this->belongsTo('App\penjualan');
    }

}
