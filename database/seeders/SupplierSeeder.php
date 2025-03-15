<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Elektronik Indonesia',
                'supplier_alamat' => 'Jl. Bandung Raya No. 123, Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'PT Makanan Berkualitas',
                'supplier_alamat' => 'Jl. indonesia Raya No. 456, Surabaya',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'PT IKEA Indonesia',
                'supplier_alamat' => 'Jl. Jakarta Raya No. 789, Bandung',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
