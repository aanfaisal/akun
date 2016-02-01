<?php

use Illuminate\Database\Seeder;

class nonotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nonota')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('nonota_id'=>1, 'nama'=>'NT-000001'),
                array('nonota_id'=>2, 'nama'=>'NT-000002'),
                array('nonota_id'=>3, 'nama'=>'NT-000003'),

            );

        //masukkan data array ke database
        DB::table('nonota')->insert($post);
    }
}
