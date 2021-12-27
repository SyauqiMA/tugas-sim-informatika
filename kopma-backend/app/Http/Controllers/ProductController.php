<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return new ProductCollection(Product::paginate(5));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(! $request->user->tokenCan('admin')) {
            abort(403);
        }
        
        $validationRulesForProduct = [
            'name' => ['required'],
            'category_id' => ['required', Rule::in(ProductCategory::all()->pluck('id'))],
            'slug' => ['required', 'unique:product_categories'],
            'description' => ['required', 'min:15'],
            'price' => ['numeric', 'integer'],
            'quantity' => ['numeric', 'integer']
        ];

        $validate = Validator::make($request->all(), $validationRulesForProduct);

        if($validate->fails()) {
            return response()->json([
                $validate->errors()
            ], 400);
        }

        $validatedData = $validate->validated();

        $product = Product::create($validatedData);

        return response()->json([
            'message' => 'register success',
            'product' => $product,
            'photos' => $product->photos
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return new ProductResource($product);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if(! $request->user->tokenCan('admin')) {
            abort(403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product, Request $request)
    {
        if(! $request->user->tokenCan('admin')) {
            abort(403);
        }

        $product->delete();

        return response()->json([
            'product' => $product,
            'message' => 'delete successful'
        ], 204);
    }
}
