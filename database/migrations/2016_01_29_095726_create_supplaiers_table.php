<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupplaiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('supplaiers', function(Blueprint $table) {
                $table->increments('supplaier_id');
                $table->string('nama', 50);
                $table->text('alamat');
                $table->string('telp', 20);
                $table->string('status', 20);
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
        Schema::drop('supplaiers');
    }

}
