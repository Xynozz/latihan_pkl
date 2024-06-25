<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::latest()->get();
        return view('brand.index', compact('brand'));

    }
    public function create()
    {
        $brand = Brand::all();
        $product = Product::all();
        return view('brand.create', compact('brand', 'product'));

    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_brand' => 'required',
        ]);

        $brand = new Brand();
        $brand->name_brand = $request->name_brand;
        $brand->save();

        return redirect()->route('brand.index')
            ->with('success', 'data berhasil ditambahkan');

    }
    public function show($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.show', compact('brand'));

    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('brand.edit', compact('brand'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name_brand' => 'required',
        ]);

        $brand = Brand::findOrFail($id);
        $brand->name_brand = $request->name_brand;
        $brand->save();

        return redirect()->route('brand.index')
            ->with('success', 'data berhasil di ubah');

    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete();

        return redirect()->route('brand.index')
            ->with('success', 'data berhasil di hapus');

    }
}
