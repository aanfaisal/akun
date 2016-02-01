<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurnalpembelian extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jurnalpembelians';
    protected $primaryKey = "jurnalpembelian_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pembelian_id', 'supplaier_id', 'tgl_jurnal', 'tgl_bayar', 'akun_id', 'debet', 'kredit', 'ket_jurnal', 'ref'];

    public function akun()
    {
        return $this->belongsTo('App\akun');
    }
    public function supplaier()
    {
        return $this->belongsTo('App\supplaier');
    }
    public function pembelian()
    {
        return $this->belongsTo('App\pembelian');
    }
    public function barang()
    {
        return $this->belongsTo('App\barang');
    }
}
