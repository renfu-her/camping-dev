<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return view('backend.category.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.category.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('backend.category.show');
    }

    public function edit($id)
    {
        return view('backend.category.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
