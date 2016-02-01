<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'barangs';
    protected $primaryKey = "barang_id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['kategori_id', 'jenis_id', 'merk_id', 'satuan_id', 'nama', 'harga_beli', 'harga_jual', 'stok', 'konversi', 'minstok'];

    public function penjualan()
    {
        return $this->hasMany('App\penjualan');
    }
    public function pembelian()
    {
        return $this->hasMany('App\pembelian');
    }
    public function jurnalpembelian()
    {
        return $this->hasMany('App\jurnalpembelian');
    }
    public function kartustok()
    {
        return $this->hasOne('App\kartustok');
    }
    public function satuan()
    {
        return $this->belongsTo('App\satuan');
    }
    public function merk()
    {
        return $this->belongsTo('App\merk');
    }
    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }
    public function jenis()
    {
        return $this->belongsTo('App\jenis');
    }
}
