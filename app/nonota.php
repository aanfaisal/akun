<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nonota extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nonota';
    protected $primaryKey = "nonota_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama'];

    public function penerimaanka()
    {
        return $this->hasMany('App\penerimaanka');
    }
    public function penjualan()
    {
        return $this->hasMany('App\penjualan');
    }
    public function jurnalpenjualan()
    {
        return $this->hasMany('App\jurnalpenjualan');
    }
}
