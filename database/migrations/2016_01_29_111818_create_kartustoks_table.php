<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKartustoksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('kartustoks', function(Blueprint $table) {
                $table->increments('kartustok_id');
                $table->integer('barang_id')->unsigned();
                $table->date('tgl');
                $table->string('jenis', 30);
                $table->integer('transaksi_id')->unsigned();
                $table->mediumInteger('stokawal');
                $table->mediumInteger('masuk');
                $table->mediumInteger('keluar');
                $table->mediumInteger('stokakhir');
                $table->mediumInteger('sisa');
                $table->mediumInteger('harga');
                $table->bigInteger('hargabeli');
                $table->bigInteger('laba');

                $table->timestamps();
                $table->foreign('barang_id')->references('barang_id')->on('barangs');
                $table->foreign('transaksi_id')->references('penjualan_id')->on('penjualans');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kartustoks');
    }

}
