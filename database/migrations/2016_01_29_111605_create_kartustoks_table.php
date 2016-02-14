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
                $table->integer('jenis_id')->unsigned();
                $table->mediuminteger('stokawal');
                $table->mediumInteger('masuk');
                $table->mediumInteger('keluar');
                $table->mediumInteger('stokakhir');
                $table->mediumInteger('sisa');
                $table->mediumInteger('harga');
                $table->mediumInteger('hargabeli');
                $table->mediumInteger('laba');
                $table->timestamps();

                $table->foreign('barang_id')->references('barang_id')->on('barangs')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('jenis_id')->references('jenis_id')->on('jenis')->onDelete('cascade')->onUpdate('cascade');
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
