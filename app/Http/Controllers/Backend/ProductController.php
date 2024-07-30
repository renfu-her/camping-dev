<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::where('slug', 'like', '/rent/%')->where('status', 1)->get();

        $products = Product::with('category')->get();

        return view('backend.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        return view('backend.product.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('backend.product.show');
    }

    public function edit($id)
    {
        return view('backend.product.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect()->route('backend.product.index')->with('success', '刪除成功！');
    }
}
