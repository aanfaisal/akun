<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('barangs', function(Blueprint $table) {
                $table->increments('barang_id');
                $table->integer('kategori_id')->unsigned();
                $table->integer('jenis_id')->unsigned();
                $table->integer('merk_id')->unsigned();
                $table->integer('satuan_id')->unsigned();
                $table->string('nama');
                $table->bigInteger('harga_beli');
                $table->bigInteger('harga_jual');
                $table->string('stok');
                $table->string('konversi');
                $table->string('minstok');
                $table->timestamps();

            $table->foreign('kategori_id')->references('kategori_id')->on('kategori');
            $table->foreign('jenis_id')->references('jenis_id')->on('jenis');
            $table->foreign('merk_id')->references('merk_id')->on('merk');
            $table->foreign('satuan_id')->references('satuan_id')->on('satuan');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('barangs');
    }

}
