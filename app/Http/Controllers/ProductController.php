<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category()
    {
        $products = ['foodBeverage', 'beautyHealth', 'homeCare', 'babyKid'];
        return view('products', ['category' => 'Kategori Produk', 'products' => $products]);
    }
    public function foodBeverage()
    {
        $products = ['Matcha Latte', 'Coffe', 'Dalgona'];
        return view('products', ['category' => 'Food Beverage', 'products' => $products]);
    }
    public function beautyHealth()
    {
        $products = ['Serum', 'Sunscreen', 'Essence'];
        return view('products', ['category' => 'Beauty Health', 'products' => $products]);
    }
    public function homeCare()
    {
        $products = ['Detergen', 'Strawberry Soap', 'Handsanitizer'];
        return view('products', ['category' => 'Home Care', 'products' => $products]);
    }
    public function babyKid()
    {
        $products = ['Pampers', 'Milk', 'Feeing Bootle'];
        return view('products', ['category' => 'Baby Kid', 'products' => $products]);
    }
}
