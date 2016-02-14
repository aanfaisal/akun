<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurnalumumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('jurnalumums', function(Blueprint $table) {
                $table->increments('jurnalumum_id');
                $table->date('tgl_jurnal');
                $table->integer('akun_id')->unsigned();
                $table->bigInteger('debet');
                $table->bigInteger('kredit');
                $table->text('ket_jurnal');
                $table->string('ref', 50);

                $table->timestamps();
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
        Schema::drop('jurnalumums');
    }

}
