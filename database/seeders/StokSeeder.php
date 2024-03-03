<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 8,
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 10,
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 9,
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 5,
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 6,
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 7,
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 4,
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'user_id' => 3,
                'stok_tanggal' => "2024-02-12 14:01:00.",
                'stok_jumlah' => 4,
            ],
        ];
        DB::table('m_t_stok')->insert($data);
    }
}
