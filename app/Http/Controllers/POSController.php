<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POSController extends Controller
{
    public function home()
    {
        return view('welcome')
            ->with('name', 'Ratnasari');
    }
    public function category()
    {
        $products = ['Sembako', 'Sayuran & Buah', 'Skincare', 'Peralatan Bayi', 'ATK'];
        return view('products', ['category' => 'Kategori Produk', 'products' => $products]);
    }
    public function sembako()
    {
        $products = ['Beras', 'Minyak', 'Gula', 'Telor', 'Mie', 'Kecap'];
        return view('products', ['category' => 'Sembako', 'products' => $products]);
    }
    public function sayurbuah()
    {
        $products = ['Sawi', 'Apel', 'Kangkung', 'Jeruk', 'Tomat', 'Cabe'];
        return view('products', ['category' => 'Sayur & Buah', 'products' => $products]);
    }
    public function skincare()
    {
        $products = ['Bedak', 'Sunscreen', 'Serum', 'Lipstik', 'Maskara', 'Pensil Alis'];
        return view('products', ['category' => 'Skincare', 'products' => $products]);
    }
    public function peralatanbayi()
    {
        $products = ['Pampers', 'Minyak Telon', 'Bedak', 'Baju Anak', 'Susu', 'Botol Susu'];
        return view('products', ['category' => 'Peralatan Bayi', 'products' => $products]);
    }
    public function atk()
    {
        $products = ['Pensil', 'Bulpen', 'Buku', 'Map Kertas', 'Penghapus', 'Pengaris'];
        return view('products', ['category' => 'ATK', 'products' => $products]);
    }
}
