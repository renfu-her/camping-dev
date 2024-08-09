<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Services\CategoryService as Service;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', 5)->orderBy('sort')->get();

        // Create a tree structure
        // $tree = $this->buildCategoryTree($categories);

        return view('backend.category.index', compact('categories'));
    }

    private function buildCategoryTree($categories, $parentId = 0)
    {
        $branch = [];

        foreach ($categories as $category) {
            if ($category->parent_id == $parentId) {
                $children = $this->buildCategoryTree($categories, $category->id);

                if ($children) {
                    $category->children = $children;
                }

                if ($parentId != 0) {
                    $parent = $categories->where('id', $parentId)->first();
                    $category->name = $parent->name . ' -> ' . $category->name;
                }

                $branch[] = $category;
            }
        }

        return $branch;
    }

    public function create()
    {

        $categories = ['0' => '新增子類別'] + Category::where('parent_id', 5)->orderBy('sort')->get()->pluck('name', 'id')->toArray();

        return view('backend.category.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $result = (new Service($request))
            ->runValidate('category')
            ->store()
            ->getResponse();

        return redirect('backend/category');
    }

    public function show($id)
    {
        return view('backend.category.show');
    }

    public function edit($id)
    {

        $category = Category::find($id);
        $categories = ['0' => '新增子類別'] + Category::where('parent_id', 5)->get()->pluck('name', 'id')->toArray();

        return view('backend.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $result = (new Service($request, $id))
            ->runValidate('category')
            ->update()
            ->getResponse();

        return redirect('backend/category');
    }

    public function destroy($id)
    {
        Category::destroy($id);

        return redirect()->route('backend.category.index')->with('success', '刪除成功！');
    }
}
