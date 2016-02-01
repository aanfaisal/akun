<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kategori';
    protected $primaryKey = "kategori_id";

    public function jenis()
    {
        return $this->hasMany('App\jenis');
    }
     public function barang()
    {
        return $this->hasMany('App\barang');
    }
    public function merk()
    {
        return $this->hasMany('App\merk');
    }

}
