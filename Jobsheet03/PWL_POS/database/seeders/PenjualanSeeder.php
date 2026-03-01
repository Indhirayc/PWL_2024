<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i<=10; $i++) {
            DB::table('t_penjualan')->insert([
                'user_id' => 2,
                'tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
