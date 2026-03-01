<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i<=10; $i++) {
            DB::table('t_stok')->insert([
                'barang_id' => $i,
                'user_id' => 1,
                'stok_jumlah' => rand(10,100),
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
