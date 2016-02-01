<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAkunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('akuns', function(Blueprint $table) {
                $table->increments('akun_id');
                $table->string('nama', 30);
                $table->text('keterangan');
                $table->string('status', 30);
                $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('akuns');
    }

}
