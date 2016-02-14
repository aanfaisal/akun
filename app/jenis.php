<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jenis';
    protected $primaryKey = "jenis_id";

    public function barang()
    {
        return $this->hasMany('App\barang');
    }
    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }
    public function kartustok()
    {
        return $this->hasMany('App\kartustok');
    }
}
