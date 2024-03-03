<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\UniqueConstraintViolationException;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 01010,
                'penjualan_id' => 101,
                'barang_id' => 1,
                'harga' => 15000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01020,
                'penjualan_id' => 101,
                'barang_id' => 2,
                'harga' => 16000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01030,
                'penjualan_id' => 101,
                'barang_id' => 8,
                'harga' => 10000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01040,
                'penjualan_id' => 102,
                'barang_id' => 1,
                'harga' => 12000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 01050,
                'penjualan_id' => 102,
                'barang_id' => 3,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01060,
                'penjualan_id' => 102,
                'barang_id' => 9,
                'harga' => 9000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01070,
                'penjualan_id' => 103,
                'barang_id' => 2,
                'harga' => 16000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01310,
                'penjualan_id' => 103,
                'barang_id' => 1,
                'harga' => 15000,
                'jumlah' => 10,
            ],
            [
                'detail_id' => 01320,
                'penjualan_id' => 103,
                'barang_id' => 7,
                'harga' => 12000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01100,
                'penjualan_id' => 104,
                'barang_id' => 10,
                'harga' => 45000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01110,
                'penjualan_id' => 104,
                'barang_id' => 4,
                'harga' => 17000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01120,
                'penjualan_id' => 104,
                'barang_id' => 9,
                'harga' => 9000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01130,
                'penjualan_id' => 105,
                'barang_id' => 3,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01140,
                'penjualan_id' => 105,
                'barang_id' => 6,
                'harga' => 32000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01150,
                'penjualan_id' => 105,
                'barang_id' => 9,
                'harga' => 9000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01160,
                'penjualan_id' => 106,
                'barang_id' => 1,
                'harga' => 15000,
                'jumlah' => 15,
            ],
            [
                'detail_id' => 01170,
                'penjualan_id' => 106,
                'barang_id' => 10,
                'harga' => 45000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01330,
                'penjualan_id' => 106,
                'barang_id' => 5,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01340,
                'penjualan_id' => 107,
                'barang_id' => 2,
                'harga' => 16000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 01200,
                'penjualan_id' => 107,
                'barang_id' => 1,
                'harga' => 15000,
                'jumlah' => 3,
            ],
            [
                'detail_id' => 01210,
                'penjualan_id' => 107,
                'barang_id' => 8,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'detail_id' => 01220,
                'penjualan_id' => 108,
                'barang_id' => 3,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01230,
                'penjualan_id' => 108,
                'barang_id' => 5,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01240,
                'penjualan_id' => 108,
                'barang_id' => 6,
                'harga' => 32000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01250,
                'penjualan_id' => 109,
                'barang_id' => 3,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01260,
                'penjualan_id' => 109,
                'barang_id' => 7,
                'harga' => 12000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01270,
                'penjualan_id' => 109,
                'barang_id' => 8,
                'harga' => 10000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01350,
                'penjualan_id' => 110,
                'barang_id' => 3,
                'harga' => 19000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01360,
                'penjualan_id' => 110,
                'barang_id' => 2,
                'harga' => 16000,
                'jumlah' => 1,
            ],
            [
                'detail_id' => 01300,
                'penjualan_id' => 110,
                'barang_id' => 1,
                'harga' => 15000,
                'jumlah' => 10,
            ],
        ];
        DB::table('m_t_penjualan_detail')->insert($data);
    }
}
