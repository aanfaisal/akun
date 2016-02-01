<?php

use Illuminate\Database\Seeder;

class supplaiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 //ngosongin tabel agama
        DB::table('supplaiers')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('supplaier_id'=>1, 'nama'=>'CV. Apa ini', 'alamat'=>'Jalan Jalan Kemana Kemna', 'telp'=>'024515463', 'status'=>"Aktif"),
                array('supplaier_id'=>2, 'nama'=>'PT. Serba Ada', 'alamat'=>'Jalan Jalan Kemana Kemna', 'telp'=>'024515463', 'status'=>"Aktif"),
                array('supplaier_id'=>3, 'nama'=>'Jenked', 'alamat'=>'Jalan Jalan Kemana Kemna', 'telp'=>'024515463', 'status'=>"Aktif"),
            );

        //masukkan data array ke database
        DB::table('supplaiers')->insert($post);
    }
}
