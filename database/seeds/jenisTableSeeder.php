 <?php

use Illuminate\Database\Seeder;

class jenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ngosongin tabel agama
        DB::table('jenis')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('jenis_id'=>1, 'nama_jenis'=>'Barang Produksi', 'kategori_id'=>'6'),
                array('jenis_id'=>2, 'nama_jenis'=>'Barang Jadi', 'kategori_id'=>'6'),
                array('jenis_id'=>3, 'nama_jenis'=>'Barang Setengah Jadi', 'kategori_id'=>'6'),
                array('jenis_id'=>4, 'nama_jenis'=>'Barang Mentah', 'kategori_id'=>'6'),
            );

        //masukkan data array ke database
        DB::table('jenis')->insert($post);
    }
}
