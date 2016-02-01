<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laporanstok extends Model
{
      /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kartustoks';
    protected $primaryKey = "kartustok_id";
}
