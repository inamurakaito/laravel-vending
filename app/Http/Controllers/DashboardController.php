<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        // productsテーブルの全データを取得
        $products = Product::all();

        // dashboard.blade.php にデータを渡す
        return view('dashboard', compact('products'));
    }
}