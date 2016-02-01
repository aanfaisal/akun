<?php

use Illuminate\Database\Seeder;

class akunsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akuns')->delete();

        //bikin data dulu dalam array untuk dimasukkin kedatabase
        $post = array (
                array('akun_id'=>1, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10100 : Aktiva Lancar', 'status'=>'Aktif'),
                array('akun_id'=>2, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10101 : Kas', 'status'=>'Aktif'),
                array('akun_id'=>3, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10102 : Piutang Usaha', 'status'=>'Aktif'),
                array('akun_id'=>4, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10103 : Persediaan', 'status'=>'Aktif'),
                array('akun_id'=>5, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10200 : Aktiva Tetap', 'status'=>'Aktif'),
                array('akun_id'=>6, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10201 : Inventaris', 'status'=>'Aktif'),
                array('akun_id'=>7, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10202 : Kendaraan', 'status'=>'Aktif'),
                array('akun_id'=>8, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10203 : Akumulasi Penyusutan Kendaraan', 'status'=>'Aktif'),
                array('akun_id'=>9, 'nama'=>'Asset/Aktiva', 'keterangan'=>'10204 : Tanah', 'status'=>'Aktif'),
                array('akun_id'=>10, 'nama'=>'Hutang/Liability', 'keterangan'=>'20100 : Utang Jangka Pendek', 'status'=>'Aktif'),
                array('akun_id'=>11, 'nama'=>'Hutang/Liability', 'keterangan'=>'20101 : Utang Dagang', 'status'=>'Aktif'),
                array('akun_id'=>12, 'nama'=>'Hutang/Liability', 'keterangan'=>'20100 : Utang Jangka Pendek', 'status'=>'Aktif'),
                array('akun_id'=>13, 'nama'=>'Hutang/Liability', 'keterangan'=>'20200 : Utang Jangka Panjang', 'status'=>'Aktif'),
                array('akun_id'=>14, 'nama'=>'Hutang/Liability', 'keterangan'=>'20201 : Investasi Pihak Ketiga', 'status'=>'Aktif'),
                array('akun_id'=>15, 'nama'=>'Modal/Equity', 'keterangan'=>'30100 : Modal', 'status'=>'Aktif'),
                array('akun_id'=>16, 'nama'=>'Modal/Equity', 'keterangan'=>'30200 : Prive', 'status'=>'Aktif'),
                array('akun_id'=>17, 'nama'=>'Income/pendapatan', 'keterangan'=>'40100 : Pendapatan', 'status'=>'Aktif'),
                array('akun_id'=>18, 'nama'=>'Income/pendapatan', 'keterangan'=>'40200 : Laba Tahun Berjalan', 'status'=>'Aktif'),
                array('akun_id'=>19, 'nama'=>'HPP/Harga Pokok Penjualan', 'keterangan'=>'50100 : Pembelian', 'status'=>'Aktif'),
                array('akun_id'=>20, 'nama'=>'HPP/Harga Pokok Penjualan', 'keterangan'=>'50102 : Ongkos Angkut Pembelian', 'status'=>'Aktif'),

            );

        //masukkan data array ke database
        DB::table('akuns')->insert($post);
    }
}
