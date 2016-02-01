<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('penjualans', function(Blueprint $table) {
                $table->increments('penjualan_id');
                $table->integer('nonota_id')->unsigned();
                $table->integer('barang_id')->unsigned();
                $table->string('jumlah');
                $table->bigInteger('harga');
                $table->date('tanggal');
                $table->string('total', 20);
                $table->timestamps();

                $table->foreign('nonota_id')->references('nonota_id')->on('nonota');//->onDelete('cascade');
                $table->foreign('barang_id')->references('barang_id')->on('barangs');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penjualans');
    }

}
