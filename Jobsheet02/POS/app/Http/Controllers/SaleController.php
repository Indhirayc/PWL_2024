<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index() {
        $products = [
            ['name' => 'Teh Manis', 'price' => 5000],
            ['name' => 'Sabun Mandi', 'price' => 8000],
            ['name' => 'Popok Bayi', 'price' => 20000]
        ];
        return view('sales', compact('products'));
    }
}
