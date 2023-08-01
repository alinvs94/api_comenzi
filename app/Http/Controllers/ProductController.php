<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return response()->json($products, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $product = new Product();
        // $product->name = $request->name;
        // $product->weight = $request->weight;
        // $product->color = $request->color;
        // $product->price = $request->price;
        // $product->save();

        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json('Not found!', 404);
        }

        return response()->json(($product), 200);
        // return response()->json(__('messages.failed'), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateProductRequest $request, string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json('Not found!', 404);
        }

        $product->update($request->validated());

        // $product->name = $request->name;
        // $product->price = $request->price;
        // $product->weight = $request->weight;
        // $product->color = $request->color;

        // $product->save();

        return response()->json($product, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json('Not found!', 404);
        }

        $product->destroy();

        return response()->json('', 204);
    }
}