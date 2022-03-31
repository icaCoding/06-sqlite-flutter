<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'nama' => 'EIGER WANDERIUS 60L',
            'harga' => 15000,
            'is_ready' => 2,
            'gambar' => 'eiger_wanderius_60L.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'COSMEED SAGARMATHA 2.1 60L',
            'harga' => 15000,
            'is_ready' => 0,
            'gambar' => 'cosmeed_sagarmatha_2.1_60L.jpg'
        ]);

        DB::table('products')->insert([
        	'nama' => 'AREI TOBA 60L',
            'harga' => 15000,
            'is_ready' => 3,
            'gambar' => 'arei_toba_60L.jpg'
        ]);
        DB::table('products')->insert([
        	'nama' => 'CONSINA BERING 60L',
            'is_ready' => 1,
            'harga' => 15000,
            'gambar' => 'consina_bering_60L.jpg'
        ]);
    }
}
