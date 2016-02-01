<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'satuan';
    protected $primaryKey = "satuan_id";

    public function barang()
    {
        return $this->hasMany('App\barang');
    }
}
