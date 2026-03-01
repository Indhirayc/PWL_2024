<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode'=>'KTG1','kategori_nama'=>'Makanan','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG2','kategori_nama'=>'Minuman','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG3','kategori_nama'=>'Snack','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG4','kategori_nama'=>'ATK','created_at'=>now(),'updated_at'=>now()],
            ['kategori_kode'=>'KTG5','kategori_nama'=>'Elektronik','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
