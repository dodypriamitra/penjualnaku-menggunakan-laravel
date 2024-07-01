<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('produk')->insert([
                'nama_produk' => $faker->word,
                'id_kategori' => $faker->numberBetween(1, 10), // menyesuaikan dengan id kategori yang ada
                'berat' => $faker->numberBetween(100, 10000), // berat dalam gram
                'stok' => $faker->numberBetween(1, 100),
                'harga_produk' => $faker->numberBetween(1000, 100000),
                'deskripsi_produk' => '<p>' . $faker->sentence . '</p>', // contoh deskripsi
                'foto_produk' => 'download (' . $faker->numberBetween(1, 10) . ').jpeg', // contoh nama file foto
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
