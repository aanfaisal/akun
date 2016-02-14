<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('pembelians', function(Blueprint $table) {
                $table->increments('pembelian_id');
                $table->integer('supplaier_id')->unsigned();
                $table->date('tanggal');
                $table->integer('barang_id')->unsigned();
                $table->bigInteger('jumlah');
                $table->bigInteger('harga');
                $table->string('status', 20);
                $table->date('tgl_jatuhtempo');
                $table->string('totalpembelian', 30);
                $table->string('statusutang', 30);
                $table->timestamps();

                $table->foreign('supplaier_id')->references('supplaier_id')->on('supplaiers')->onDelete('cascade')->onUpdate('cascade');
                $table->foreign('barang_id')->references('barang_id')->on('barangs')->onDelete('cascade')->onUpdate('cascade');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pembelians');
    }

}
