<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin/products/index', compact('products'));
        //return view('top');
    }

    public function edit($id)
    {
        // DBよりURIパラメータと同じIDを持つproductの情報を取得
        $product = Product::findOrFail($id);

        // 取得した値をビュー「product/edit」に渡す
        return view('admin/products/edit', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect("admin/products");
    }

    public function create()
    {
        // 空の$productを渡す
        $product = new Product();
        return view('admin/products/create', compact('product'));
    }

    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect("admin/products");
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect("admin/products");
    }
}
