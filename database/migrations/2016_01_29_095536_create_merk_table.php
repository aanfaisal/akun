<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMerkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('merk', function(Blueprint $table) {
                $table->increments('merk_id');
                $table->integer('kategori_id')->unsigned();
                $table->string('namamerk', 30);
                $table->string('status', 30);
                $table->timestamps();

            $table->foreign('kategori_id')->references('kategori_id')->on('kategori');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('merk');
    }

}
