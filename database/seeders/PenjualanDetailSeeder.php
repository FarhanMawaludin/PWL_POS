<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $barang = [
            1 => ['nama' => 'Smartphone Samsung A14', 'harga' => 2500000],
            2 => ['nama' => 'Laptop Asus VivoBook', 'harga' => 8200000],
            3 => ['nama' => 'Kaos Polos Uniqlo', 'harga' => 100000],
            4 => ['nama' => 'Sepatu Sneakers Adidas', 'harga' => 950000],
            5 => ['nama' => 'Kopi Kapal Api 200g', 'harga' => 35000],
        ];

        $barangKeys = array_keys($barang); // Ambil hanya barang_id 1-5
        $data = [];

        for ($i = 1; $i <= 10; $i++) { // 10 transaksi
            $barangPilihan = array_rand(array_flip($barangKeys), 3); // Pilih 3 barang acak dari 1-5
            foreach ($barangPilihan as $barang_id) {
                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id'    => $barang_id,
                    'harga'        => $barang[$barang_id]['harga'],
                    'jumlah'       => rand(1, 3), // Jumlah antara 1 hingga 3
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
