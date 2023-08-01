<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(string $userId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        $products = $cart->products;

        return response()->json($products, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function add(Request $request, string $userId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        if (!$cart) {
            $cart = new Cart();
            $cart->user_id = $userId;
            $cart->save();
        }

        $product = $cart->products()->find($request->product_id);

        if ($product) {
            // $count = $cart->products()->wherePivot('product_id', $request->product_id)->value('count'); sau
            $count = $cart->products()->find($request->product_id)->pivot->count;
            $cart->products()->updateExistingPivot($request->product_id, ['count' => intval($count) + 1]);
        } else {
            $cart->products()->attach($request->product_id);
        }

        return response()->json($product, 200);
    }

    public function delete(string $userId, string $productId)
    {
        $cart = Cart::where('user_id', $userId)->first();

        $count = $cart->products()->find($productId)->pivot->count;

        if ($count > 1) {
            $cart->products()->updateExistingPivot($productId, ['count' => intval($count) - 1]);
        } else {
            $cart->products()->detach($productId);
        }

        return response()->json('', 204);
    }
}