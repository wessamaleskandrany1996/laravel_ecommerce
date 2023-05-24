<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addproduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');
        if (Auth::check()) {
            $prod_check = Product::where('id',$product_id)->first();
            if ($prod_check) {
                if (Cart::where('prod_id',$product_id)->where('user_id',Auth::id())->exists()) {
                    return response()->json(['status'=> $prod_check->name." Already Added To Cart"]);
                }else{
                    $cartItem = new Cart();
                    $cartItem->prod_id = $product_id ;
                    $cartItem->prod_qty = $product_qty ;
                    $cartItem->user_id = Auth::id() ;
                    $cartItem->save();
                    return response()->json(['status'=> $prod_check->name." Added To Cart"]);
                    }
                }
        }else{
            return response()->json(['status'=>"Login To Contenue"]);
        }
    }
    public function viewCart()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        return view('frontend.cart',compact('cartItems'));
    }
    public function destroy(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cartItem = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cartItem->delete();
                return response()->json(['status'=>"Product Deleted Succefully "]);
            }
        }else{
            return response()->json(['status'=>"Login To Contenue"]);
        }
    }
    public function updateQuantity(Request $request)
    {
        $prod_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');
        if (Auth::check()) {
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $cart = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $cart->prod_qty = $product_qty;
                $cart->update();
                return response()->json(['status'=>"Quantity Updated Succefully"]);
            }
        }else{
            return response()->json(['status'=>"Login To Contenue"]);
        }
    }
}
