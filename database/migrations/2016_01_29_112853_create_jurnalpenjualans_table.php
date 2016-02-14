<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurnalpenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('jurnalpenjualans', function(Blueprint $table) {
                $table->increments('jurnalpenjualan_id');
                $table->integer('penjualan_id')->unsigned();
                $table->integer('nonota_id')->unsigned();
                $table->date('tgl_jurnal');
                $table->integer('akun_id')->unsigned();
                $table->bigInteger('debet');
                $table->bigInteger('kredit');
                $table->text('ket_jurnal');
                $table->string('ref', 50);
                $table->timestamps();

                $table->foreign('penjualan_id')->references('penjualan_id')->on('penjualans');
                $table->foreign('nonota_id')->references('nonota_id')->on('nonota');
                $table->foreign('akun_id')->references('akun_id')->on('akuns');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jurnalpenjualans');
    }

}
