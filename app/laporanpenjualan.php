<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanpenjualan extends Model
{
          /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'penjualans';
    protected $primaryKey = "penjualan_id";
}
