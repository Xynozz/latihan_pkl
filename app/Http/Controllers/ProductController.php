<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::latest()->get();
        return view('product.index', compact('product'));

    }
    public function create()
    {
        $brand = Brand::all();
        $product = Product::all();
        return view('product.create', compact('brand', 'product'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_product' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
            'id_brand' => 'required',
        ]);

        $product = new Product();
        $product->name_product = $request->name_product;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_brand = $request->id_brand;
        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));

    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $brand = Brand::all();
        return view('product.edit', compact('product','brand'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_product' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'description' => 'required',
            'id_brand' => 'required',
        ]);

        $product = Product::findOrFail($id);
        $product->name_product = $request->name_product;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->id_brand = $request->id_brand;
        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'data berhasil di ubah');

    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')
            ->with('success', 'data berhasil di hapus');

    }
}
