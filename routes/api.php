<?php
use App\Models\Product;

Route::middleware('auth:sanctum')->get('/products', function () {
    return Product::all();
});

Route::middleware('auth:sanctum')->post('/products', function (Request $request) {
    $product = Product::create($request->all());
    return response()->json($product, 201);
});

Route::middleware('auth:sanctum')->put('/products/{id}', function (Request $request, $id) {
    $product = Product::find($id);
    $product->update($request->all());
    return response()->json($product);
});

Route::middleware('auth:sanctum')->delete('/products/{id}', function ($id) {
    Product::find($id)->delete();
    return response()->json(null, 204);
});
Route::middleware('auth:sanctum')->get('/products', function () {
    return Product::paginate(10); // প্রতি পৃষ্ঠায় 10টি পণ্য দেখাবে
});

