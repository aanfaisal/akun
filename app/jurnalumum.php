<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurnalumum extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'jurnalumums';
    protected $primaryKey = "jurnalumum_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tgl_jurnal', 'akun_id', 'debet', 'kredit', 'ket_jurnal', 'ref'];

    public function akun()
    {
        return $this->belongsTo('App\akun');
    }

}
