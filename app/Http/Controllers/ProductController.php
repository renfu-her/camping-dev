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

        return view('frontend.product.index', compact('products', 'category'));
    }

    public function detail($productId)
    {

        $product = Product::where('id', $productId)->with('category')->first();
        $category = Category::where('id', $product->category_id)->first();

        if (!$product) {
            return redirect('/')->with('error', '商品不存在！');
        }

        return view('frontend.product.detail', compact('product', 'category'));
    }
}
