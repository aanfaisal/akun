<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplaier extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'supplaiers';
    protected $primaryKey = "supplaier_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'alamat', 'telp', 'status'];

    public function pengeluaranka()
    {
        return $this->hasMany('App\pengeluaranka');
    }
    public function jurnalpembelian()
    {
        return $this->hasMany('App\jurnalpembelian');
    }
    public function pembelian()
    {
        return $this->hasMany('App\pembelian');
    }
}
