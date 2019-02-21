<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;

use Session;

use Illuminate\Http\Request;


class CartController extends Controller
{
    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }
    public function getDeleteCartItem(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new Cart($oldCart);
        $cart->remove($product, $product->id);

        if ($cart->totalQty == 0)
        {
            $request->session()->forget('cart');
            return redirect()->back();
        }

        $request->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('cart.shopping-cart', ['products' => []]);
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('cart.shopping-cart', ['products' => $cart->items]);
    }
}
