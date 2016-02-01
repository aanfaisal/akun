<?php

use Illuminate\Database\Seeder;

class merkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merk')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('merk_id'=>1, 'kategori_id'=>5, 'namamerk'=>'3M'),
                array('merk_id'=>2, 'kategori_id'=>5, 'namamerk'=>'KD'),
                array('merk_id'=>3, 'kategori_id'=>5, 'namamerk'=>'Gretel'),
                array('merk_id'=>4, 'kategori_id'=>5, 'namamerk'=>'Fisher'),

            );

        //masukkan data array ke database
        DB::table('merk')->insert($post);
    }
}
