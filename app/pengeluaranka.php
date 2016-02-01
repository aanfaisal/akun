<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengeluaranka extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pengeluarankas';
    protected $primaryKey = "pengeluarankas_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pembelian_id', 'supplaier_id', 'tgl_jurnal', 'debet_utang', 'debet_pembelian', 'kreditkas', 'ket_jurnal', 'ref'];

    public function supplaier()
    {
        return $this->belongsTo('App\supplaier');
    }
    public function pembelian()
    {
        return $this->belongsTo('App\pembelian');
    }
}
