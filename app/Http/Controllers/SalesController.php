<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $sales = [
            ['id' => 1, 'product' => 'Product A', 'quantity' => 5, 'total' => 100],
            ['id' => 2, 'product' => 'Product B', 'quantity' => 3, 'total' => 75],
            ['id' => 3, 'product' => 'Product C', 'quantity' => 2, 'total' => 50],
        ];
        return view('sales.index', ['sales' => $sales]);
    }
}
