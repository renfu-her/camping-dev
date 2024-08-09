<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->where('status', 1)->orderByDesc('created_at')->limit(8)->get();

        return view('frontend.home', compact('products'));
    }
}
