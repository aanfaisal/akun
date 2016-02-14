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
    protected $fillable = ['barang_id', 'tgl', 'jenis_id', 'stokawal', 'masuk', 'keluar', 'stokakhir', 'sisa', 'harga', 'hargabeli', 'laba'];

    public function barang()
    {
        return $this->belongsTo('App\barang');
    }
    public function jenis()
    {
        return $this->belongsTo('App\jenis');
    }

}
