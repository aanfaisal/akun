<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanpembelian extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pembelians';
    protected $primaryKey = "pembelian_id";
}
