<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomepageController extends Controller
{
    /**
     * Display the homepage view.
     */
    public function index()
    {
        $products = Product::all()->sortByDesc('popularity')->take(8);
        return view('homepage', compact('products'));
    }
}
