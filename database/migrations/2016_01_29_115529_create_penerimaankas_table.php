<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePenerimaankasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('penerimaankas', function(Blueprint $table) {
                $table->increments('penerimaankas_id');
                $table->integer('penjualan_id')->unsigned();
                $table->integer('nonota_id')->unsigned();
                $table->date('tgl_jurnal');
                $table->bigInteger('debetkas');
                $table->text('ket_jurnal');
                $table->string('ref');
                $table->timestamps();

                $table->foreign('penjualan_id')->references('penjualan_id')->on('penjualans');
                $table->foreign('nonota_id')->references('nonota_id')->on('nonota');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('penerimaankas');
    }

}
