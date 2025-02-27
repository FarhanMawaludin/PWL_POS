<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id'            => 1, // Admin
                'pembeli'            => 'Budi Santoso',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 2, // Manager
                'pembeli'            => 'Siti Aminah',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 3, // Staff/Kasir
                'pembeli'            => 'Joko Widodo',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 1, // Admin
                'pembeli'            => 'Ani Rahmawati',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 2, // Manager
                'pembeli'            => 'Agus Salim',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 3, // Staff/Kasir
                'pembeli'            => 'Rina Sari',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 1, // Admin
                'pembeli'            => 'Tono Subagyo',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 2, // Manager
                'pembeli'            => 'Dewi Kartika',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 3, // Staff/Kasir
                'pembeli'            => 'Bambang Suharto',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
            [
                'user_id'            => 1, // Admin
                'pembeli'            => 'Sari Indah',
                'penjualan_kode'     => 'TRX-' . Str::random(8),
                'penjualan_tanggal'  => now(),
                'created_at'         => now(),
                'updated_at'         => now(),
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
