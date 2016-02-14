<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kartustok extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kartustoks';
    protected $primaryKey = "kartustok_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tgl', 'jenis', 'transaksi_id', 'stokawal', 'masuk', 'keluar', 'stokakhir', 'sisa', 'harga', 'hargabeli', 'laba'];

    public function barang()
    {
        return $this->belongsTo('App\barang');
    }

}
