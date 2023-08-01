<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();

        return response()->json($orders, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create($request->all());

        $cart = Cart::where("user_id", 1)->first();

        $products = $cart->products;
        foreach ($products as $product) {
            $count = $cart->products()->find($product->id)->pivot->count;
            $order->products()->attach($product->id);
            if ($count > 1) {
                $order->products()->updateExistingPivot($product->id, ['count' => $count]);
            }
        }
        $cart->products()->detach();

        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json('Not found!', 404);
        }

        return response()->json($order, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::find($id);

        $order->update($request->all());

        return response()->json($order, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);

        if (!$order) {
            return response()->json('Not found!', 404);
        }

        $order->destroy();

        return response()->json('', 204);
    }
}