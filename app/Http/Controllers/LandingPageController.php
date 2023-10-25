<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $product = Product::latest()->take(6)->get();
        return view('landingpage.home')->with([
            'product' => $product,
        ]);
    }
    public function class()
    {
        return view('landingpage.class');
    }
    public function craftsman()
    {
        return view('landingpage.craftsman');
    }
    public function product()
    {
        $product = Product::all();
        return view('landingpage.product.index')->with([
            'product' => $product,
        ]);
    }
    public function productDetail(string $slug)
    {
        $product = Product::where('slug', $slug)->get();
        return view('landingpage.product.detail')->with([
            'product' => $product,
        ]);
    }
    public function gallery()
    {
        return view('landingpage.gallery');
    }
    public function about()
    {
        return view('landingpage.about');
    }
}
