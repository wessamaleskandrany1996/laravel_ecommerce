<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Admin\CategoryController;
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
    public function viewcategory($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('cate_id', $category->id)->where('status', '1')->get();
            return view('frontend.products.index', compact('category','products'));
        }else{
            return redirect('/')->with('status',"Slug dosnot exist");
        }
    }
    public function viewproduct($cate_slug, $prod_slug)
    {
        if (Category::where('slug', $cate_slug)->exists()) {
            if (Product::where('slug', $prod_slug)->exists()){
                $products = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.product',compact('products'));
            }else{
                return redirect('/')->with('status',"the link was broken");
            }
        }else{
            return redirect('/')->with('status',"no such category found");
        }
    }
}
