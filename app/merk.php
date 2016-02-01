<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'merk';
    protected $primaryKey = "merk_id";

    public function barang()
    {
        return $this->hasMany('App\barang');
    }

    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }

}
