<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $product = Product::where('trending','1')->take(15)->get();
        $categories = Category::where('popular','1')->take(15)->get();
        return view('frontend.index', compact('product','categories'));
    }
    public function category()
    {
        $category = Category::where('status','1')->take(15)->get();
        return view('frontend.category', compact('category'));
    }
}
