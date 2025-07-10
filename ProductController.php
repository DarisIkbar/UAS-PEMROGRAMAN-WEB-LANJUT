<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        return view('products.index');
    }

    // Endpoint untuk load data produk via AJAX
    public function loadProducts()
    {
        $products = Product::all();
        return response()->json($products);
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required|unique:products',
            'nama_produk' => 'required|unique:products',
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $product = Product::create([
            'kode_produk' => $request->kode_produk,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);

        // Jika request AJAX (fetch), balikan JSON agar data langsung muncul di tabel
         if ($request->ajax() || $request->wantsJson()) {
            return response()->json($product, 201);
        }

        // Jika bukan AJAX, redirect seperti biasa
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menampilkan form edit (tidak digunakan jika inline edit di index)
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Update data produk
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'kode_produk' => 'required|unique:products,kode_produk,' . $product->id,
            'nama_produk' => 'required|unique:products,nama_produk,' . $product->id,
            'harga' => 'required|integer|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $product->update($request->all());

        // Jika request AJAX, balikan JSON
        if ($request->ajax()) {
            return response()->json($product);
        }

        return redirect()->back()->with('success', 'Produk berhasil diupdate!');
    }

    // Hapus produk
    public function destroy(Product $product)
    {
        $product->delete();

        // Jika request AJAX, balikan JSON
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}