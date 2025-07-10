<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    Product::insert([
        ['kode_produk' => 'P001', 'nama_produk' => 'Sabun', 'harga' => 5000, 'stok' => 100],
            ['kode_produk' => 'P002', 'nama_produk' => 'Shampoo', 'harga' => 12000, 'stok' => 80],
            ['kode_produk' => 'P003', 'nama_produk' => 'Pasta Gigi', 'harga' => 8000, 'stok' => 60],
            ['kode_produk' => 'P004', 'nama_produk' => 'Sikat Gigi', 'harga' => 4000, 'stok' => 75],
            ['kode_produk' => 'P005', 'nama_produk' => 'Sabun Cuci', 'harga' => 9000, 'stok' => 50],
            ['kode_produk' => 'P006', 'nama_produk' => 'Minyak Goreng', 'harga' => 25000, 'stok' => 40],
            ['kode_produk' => 'P007', 'nama_produk' => 'Gula Pasir', 'harga' => 12000, 'stok' => 60],
            ['kode_produk' => 'P008', 'nama_produk' => 'Garam', 'harga' => 3000, 'stok' => 100],
            ['kode_produk' => 'P009', 'nama_produk' => 'Tepung Terigu', 'harga' => 11000, 'stok' => 45],
            ['kode_produk' => 'P010', 'nama_produk' => 'Beras 5kg', 'harga' => 60000, 'stok' => 30],
            ['kode_produk' => 'P011', 'nama_produk' => 'Kopi Sachet', 'harga' => 1500, 'stok' => 300],
            ['kode_produk' => 'P012', 'nama_produk' => 'Teh Celup', 'harga' => 7000, 'stok' => 70],
            ['kode_produk' => 'P013', 'nama_produk' => 'Air Mineral 600ml', 'harga' => 3000, 'stok' => 120],
            ['kode_produk' => 'P014', 'nama_produk' => 'Mi Instan', 'harga' => 3500, 'stok' => 150],
            ['kode_produk' => 'P015', 'nama_produk' => 'Kecap Manis', 'harga' => 9000, 'stok' => 55],
            ['kode_produk' => 'P016', 'nama_produk' => 'Saos Tomat', 'harga' => 8500, 'stok' => 50],
            ['kode_produk' => 'P017', 'nama_produk' => 'Sarden Kaleng', 'harga' => 10000, 'stok' => 40],
            ['kode_produk' => 'P018', 'nama_produk' => 'Tissue Roll', 'harga' => 6000, 'stok' => 80],
            ['kode_produk' => 'P019', 'nama_produk' => 'Detergen', 'harga' => 15000, 'stok' => 35],
            ['kode_produk' => 'P020', 'nama_produk' => 'Rokok Filter', 'harga' => 25000, 'stok' => 20],
        ]);

    }
}
