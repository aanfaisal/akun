<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurnalpembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('jurnalpembelians', function(Blueprint $table) {
                $table->increments('jurnalpembelian_id');
                $table->integer('pembelian_id')->unsigned();
                $table->integer('supplaier_id')->unsigned();
                $table->date('tgl_jurnal');
                $table->date('tgl_bayar');
                $table->integer('akun_id');
                $table->bigInteger('debet');
                $table->bigInteger('kredit');
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
        Schema::drop('jurnalpembelians');
    }

}
