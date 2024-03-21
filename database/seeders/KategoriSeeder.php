<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\UniqueConstraintViolationException;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'A1',
                'kategori_nama' => 'Sembako',
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'A2',
                'kategori_nama' => 'BodyCare',
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'A3',
                'kategori_nama' => 'Skincare',
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'A4',
                'kategori_nama' => 'HomeCare',
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'A5',
                'kategori_nama' => 'BabyCare',
            ],
            [
                'kategori_id' => 6,
                'kategori_kode' => 'CML',
                'kategori_nama' => 'Cemilan',
            ],
            [
                'kategori_id' => 7,
                'kategori_kode' => 'MNR',
                'kategori_nama' => 'Minuman Ringan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
