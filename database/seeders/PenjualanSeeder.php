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
        $data = [
            [
                'penjualan_id' => 101,
                'user_id' => 3,
                'pembeli' => 'Ratna',
                'penjualan_kode' => 1013,
                'penjualan_tanggal' => "2024-02-15 10:01:00.",
            ],
            [
                'penjualan_id' => 102,
                'user_id' => 3,
                'pembeli' => 'Dea',
                'penjualan_kode' => 1023,
                'penjualan_tanggal' => "2024-02-15 10:02:00.",
            ],
            [
                'penjualan_id' => 103,
                'user_id' => 3,
                'pembeli' => 'Ingga',
                'penjualan_kode' => 1033,
                'penjualan_tanggal' => "2024-02-15 10:03:00.",
            ],
            [
                'penjualan_id' => 104,
                'user_id' => 3,
                'pembeli' => 'Yogiana',
                'penjualan_kode' => 1043,
                'penjualan_tanggal' => "2024-02-15 10:04:00.",
            ],
            [
                'penjualan_id' => 105,
                'user_id' => 3,
                'pembeli' => 'Sofi',
                'penjualan_kode' => 1053,
                'penjualan_tanggal' => "2024-02-15 10:05:00.",
            ],
            [
                'penjualan_id' => 106,
                'user_id' => 3,
                'pembeli' => 'Fera',
                'penjualan_kode' => 1063,
                'penjualan_tanggal' => "2024-02-15 10:06:00.",
            ],
            [
                'penjualan_id' => 107,
                'user_id' => 3,
                'pembeli' => 'Surya',
                'penjualan_kode' => 1073,
                'penjualan_tanggal' => "2024-02-15 10:07:00.",
            ],
            [
                'penjualan_id' => 108,
                'user_id' => 3,
                'pembeli' => 'Arza',
                'penjualan_kode' => 1083,
                'penjualan_tanggal' => "2024-02-15 10:08:00.",
            ],
            [
                'penjualan_id' => 109,
                'user_id' => 3,
                'pembeli' => 'Kamila',
                'penjualan_kode' => 1093,
                'penjualan_tanggal' => "2024-02-15 10:09:00.",
            ],
            [
                'penjualan_id' => 110,
                'user_id' => 3,
                'pembeli' => 'Ratna',
                'penjualan_kode' => 1103,
                'penjualan_tanggal' => "2024-02-15 10:10:00.",
            ],
        ];
        DB::table('m_t_penjualan')->insert($data);
    }
}
