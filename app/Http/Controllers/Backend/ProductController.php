<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;

use App\Services\ProductService as Service;

class ProductController extends Controller
{
    public function index()
    {

        $categories = Category::where('slug', 'like', '/rent/%')->where('status', 1)->get()->pluck('name', 'id')->toArray();

        $products = Product::with('category')->get();


        return view('backend.product.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::where('slug', 'like', '/rent/%')->where('status', 1)->get()->pluck('name', 'id')->toArray();

        return view('backend.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $result = (new Service($request))
            ->runValidate('product')
            ->store()
            ->getResponse();

        $msg = json_decode($result->content(), true);
        if ($msg['code'] == '00') {
            return redirect()->route('backend.product.index')->with('success', '新增成功！');
        }

        return redirect()->route('backend.product.create')->with('error', '新增失敗！');
    }

    public function show($id)
    {

        return view('backend.product.show');
    }

    public function edit(Request $request, $id)
    {
        $categories = Category::where('slug', 'like', '/rent/%')->where('status', 1)->get()->pluck('name', 'id')->toArray();

        $product = Product::with('category')->find($id);
        $content = $product->content;

        // 使用正则表达式查找所有 img 标签的 src 属性，并替换路径
        $pattern = '/<img\s+[^>]*src=["\'](.*?)["\'][^>]*>/i';
        $replacement = function ($matches) {
            $src = $matches[1];
            $newSrc = preg_replace('/^\.\.\/\.\.\//', '/', $src);
            return str_replace($src, $newSrc, $matches[0]);
        };

        $content = preg_replace_callback($pattern, $replacement, $content);

        $product->content = $content;

        return view('backend.product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $result = (new Service($request, $id))
            ->runValidate('product')
            ->update()
            ->getResponse();

        $msg = json_decode($result->content(), true);
        if ($msg['code'] == '00') {
            return redirect()->route('backend.product.index')->with('success', '更新成功！');
        }

        return redirect()->route('backend.product.update', $id)->with('error', '新增失敗！');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        return redirect()->route('backend.product.index')->with('success', '刪除成功！');
    }
}
