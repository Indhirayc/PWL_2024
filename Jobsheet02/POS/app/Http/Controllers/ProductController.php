<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        $products = ['Teh Manis', 'Kopi', 'Jus Buah'];
        return view('products', ['category' => 'Food & Beverage', 'products' => $products]);
    }

    public function beautyHealth() {
        $products = ['Sabun Mandi', 'Shampoo', 'Lotion'];
        return view('products', ['category' => 'Beauty & Health', 'products' => $products]);
    }

    public function homeCare() {
        $products = ['Detergen', 'Pembersih Lantai', 'Pengharum Ruangan'];
        return view('products', ['category' => 'Home Care', 'products' => $products]);
    }

    public function babyKid() {
        $products = ['Popok', 'Susu Bayi', 'Mainan Anak'];
        return view('products', ['category' => 'Baby & Kid', 'products' => $products]);
    }
}
