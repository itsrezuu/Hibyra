<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class StoreController extends Controller
{
    public function home(): View
    {
        $featuredProducts = Product::query()
            ->with('category')
            ->where('is_available', true)
            ->where('is_featured', true)
            ->whereHas('category', fn ($query) => $query->where('is_active', true))
            ->orderBy('sort_order')
            ->take(3)
            ->get();

        return view('home', compact('featuredProducts'));
    }

    public function menu(): View
    {
        $products = Product::query()
            ->with('category')
            ->where('is_available', true)
            ->whereHas('category', fn ($query) => $query->where('is_active', true))
            ->orderBy('sort_order')
            ->get();

        return view('menu', compact('products'));
    }
}
