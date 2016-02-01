<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penerimaanka extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penerimaankas';
    protected $primaryKey = "penerimaankas_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['penjualan_id', 'nonota_id', 'tgl_jurnal', 'debetkas', 'ket_jurnal', 'ref'];

    public function nonota()
    {
        return $this->belongsTo('App\nonota');
    }
    public function penjualan()
    {
        return $this->belongsTo('App\penjualan');
    }
}
