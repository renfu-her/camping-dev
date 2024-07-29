<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.product.index');
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
        //
    }
}
