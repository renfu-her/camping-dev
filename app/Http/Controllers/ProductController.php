<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{

    public function index(Request $request, $productName)
    {

        $category = Category::where('slug', 'like', '%' . $productName . '%')->first();

        if (!$category) {
            return redirect('/')->with('error', '選單錯誤！');
        }

        $products = Product::where('category_id', $category->id)->with('category')->paginate(12);

        return view('frontend.product', compact('products', 'category'));
    }
}
