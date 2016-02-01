<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class akun extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'akuns';
    protected $primaryKey = "akun_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'keterangan', 'status'];

    public function jurnalumum()
    {
        return $this->hasMany('App\jurnalumum');
    }
    public function jurnalpenjualan()
    {
        return $this->hasMany('App\jurnalpenjualan');
    }
    public function jurnalpembelian()
    {
        return $this->hasMany('App\jurnalpembelian');
    }
}
