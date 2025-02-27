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
        $data=[
            [
                'kategori_id' => 1,
                'kategori_kode' => 'ELEC',
                'kategori_nama' => 'Elektronik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'FASH',
                'kategori_nama' => 'Fashion',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'FOOD',
                'kategori_nama' => 'Makanan & Minuman',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'HOME',
                'kategori_nama' => 'Peralatan Rumah Tangga',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'HEALTH',
                'kategori_nama' => 'Kesehatan & Kecantikan',
                'created_at' =>now(),
                'updated_at' =>now(),
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
