<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(satuanTableSeeder::class);
        $this->call(kategoriTableSeeder::class);
        $this->call(jenisTableSeeder::class);
        $this->call(merkTableSeeder::class);
        $this->call(nonotaTableSeeder::class);
        $this->call(akunsTableSeeder::class);
        $this->call(supplaiersTableSeeder::class);

    }
}
