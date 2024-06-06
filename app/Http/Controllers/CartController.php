<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->with('product')->get();
        return view('cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $cartItem = CartItem::where('user_id', Auth::id())
                            ->where('product_id', $request->product_id)
                            ->first();

        if ($cartItem) {
            $cartItem->increment('quantity', $request->quantity);
        } else {
            $cartItem = CartItem::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return back()->with('addtocartsuccess','Item successfully added!');
    }

    public function getCart()
    {
        $cartItems = CartItem::with('product')->where('user_id', Auth::id())->get();
        return response()->json($cartItems);
    }

    public function removeFromCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        CartItem::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->delete();

        return back()->with('removesuccess','Item successfully removed!');
    }

    public function checkout(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:15',
        ]);

        if(!$validatedData){
            return back()->with('error','Set your address and/or mobile number first!');
        }

        // Clear the cart
        CartItem::where('user_id', $user->id)->delete();

        // Redirect to the homepage
        return redirect('/homepage')->with('checkoutsuccess','Checkout Successful!');
    }
}