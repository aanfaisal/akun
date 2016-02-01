 <?php

use Illuminate\Database\Seeder;

class satuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ngosongin tabel agama
        DB::table('satuan')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('satuan_id'=>1, 'nama_sat'=>'Buah'),
                array('satuan_id'=>2, 'nama_sat'=>'Meter'),
                array('satuan_id'=>3, 'nama_sat'=>'Kubik'),
                array('satuan_id'=>4, 'nama_sat'=>'Dus'),
                array('satuan_id'=>5, 'nama_sat'=>'Batang'),
                array('satuan_id'=>6, 'nama_sat'=>'Unit'),
                array('satuan_id'=>7, 'nama_sat'=>'Pack'),
                array('satuan_id'=>8, 'nama_sat'=>'Set'),
                array('satuan_id'=>9, 'nama_sat'=>'Kotak'),
                array('satuan_id'=>10, 'nama_sat'=>'Lusin'),
                array('satuan_id'=>11, 'nama_sat'=>'Box'),

            );

        //masukkan data array ke database
        DB::table('satuan')->insert($post);
    }
}
