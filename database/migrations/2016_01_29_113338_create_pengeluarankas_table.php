<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePengeluarankasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pengeluarankas', function(Blueprint $table) {
                $table->increments('pengeluarankas_id');
                $table->integer('pembelian_id')->unsigned();
                $table->integer('supplaier_id')->unsigned();
                $table->date('tgl_jurnal');
                $table->bigInteger('debet_utang');
                $table->bigInteger('debet_pembelian');
                $table->bigInteger('kreditkas');
                $table->text('ket_jurnal');
                $table->string('ref', 50);
                $table->timestamps();

                $table->foreign('pembelian_id')->references('pembelian_id')->on('pembelians');
                $table->foreign('supplaier_id')->references('supplaier_id')->on('supplaiers');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pengeluarankas');
    }

}
