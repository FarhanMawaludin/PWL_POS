<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $data = [
            [
                'kategori_id'  => 1, // Elektronik
                'barang_kode'  => 'BRG001',
                'barang_nama'  => 'Smartphone Samsung A14',
                'harga_beli'   => 2200000,
                'harga_jual'   => 2500000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 1, // Elektronik
                'barang_kode'  => 'BRG002',
                'barang_nama'  => 'Laptop Asus VivoBook',
                'harga_beli'   => 7500000,
                'harga_jual'   => 8200000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 2, // Fashion
                'barang_kode'  => 'BRG003',
                'barang_nama'  => 'Kaos Polos Uniqlo',
                'harga_beli'   => 75000,
                'harga_jual'   => 100000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 2, // Fashion
                'barang_kode'  => 'BRG004',
                'barang_nama'  => 'Sepatu Sneakers Adidas',
                'harga_beli'   => 850000,
                'harga_jual'   => 950000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 3, // Makanan & Minuman
                'barang_kode'  => 'BRG005',
                'barang_nama'  => 'Kopi Kapal Api 200g',
                'harga_beli'   => 25000,
                'harga_jual'   => 35000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 3, // Makanan & Minuman
                'barang_kode'  => 'BRG006',
                'barang_nama'  => 'Indomie Goreng',
                'harga_beli'   => 2800,
                'harga_jual'   => 3500,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 4, // Peralatan Rumah Tangga
                'barang_kode'  => 'BRG007',
                'barang_nama'  => 'Rice Cooker Miyako 1.8L',
                'harga_beli'   => 350000,
                'harga_jual'   => 400000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 4, // Peralatan Rumah Tangga
                'barang_kode'  => 'BRG008',
                'barang_nama'  => 'Setrika Philips',
                'harga_beli'   => 220000,
                'harga_jual'   => 260000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 5, // Kesehatan & Kecantikan
                'barang_kode'  => 'BRG009',
                'barang_nama'  => 'Sabun Mandi Lifebuoy 100g',
                'harga_beli'   => 5500,
                'harga_jual'   => 7500,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'kategori_id'  => 5, // Kesehatan & Kecantikan
                'barang_kode'  => 'BRG010',
                'barang_nama'  => 'Sampo Pantene 170ml',
                'harga_beli'   => 18000,
                'harga_jual'   => 22000,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}

