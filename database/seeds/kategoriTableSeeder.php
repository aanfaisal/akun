 <?php

use Illuminate\Database\Seeder;

class kategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//ngosongin tabel agama
        DB::table('kategori')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('kategori_id'=>1, 'kategori'=>'Interior'),
                array('kategori_id'=>2, 'kategori'=>'Material'),
                array('kategori_id'=>3, 'kategori'=>'Finishing'),
                array('kategori_id'=>4, 'kategori'=>'Fitting'),
                array('kategori_id'=>5, 'kategori'=>'Accecories'),
                array('kategori_id'=>6, 'kategori'=>'Lain-lain')
            );

        //masukkan data array ke database
        DB::table('kategori')->insert($post);
    }
}
