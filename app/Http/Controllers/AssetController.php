<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index()
    {
        // Ambil semua aset
        $assets = Asset::all();

        // Aset dengan stok kurang dari 5
        $lowStockAssets = Asset::where('stock', '<', 5)->get();

        // Data untuk grafik
        $assetNames = $assets->pluck('name');
        $assetStocks = $assets->pluck('stock');

        return view('assets.index', [
            'assets' => $assets,
            'lowStockAssets' => $lowStockAssets,
            'assetNames' => $assetNames,
            'assetStocks' => $assetStocks,
        ]);
    }

    // Fungsi lain seperti create, edit, update, delete bisa ditambahkan di sini
}
