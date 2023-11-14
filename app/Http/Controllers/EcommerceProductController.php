<?php

namespace App\Http\Controllers;

use App\Models\EcommerceProduct;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Requests\StoreEcommerce_productRequest;
use App\Http\Requests\UpdateEcommerce_productRequest;

class EcommerceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllProducts()
    {
        try {
            $products = EcommerceProduct::getAllProductsModel();

            if ($products) {
                $response = [
                    'data' => $products,
                    'message' => "Productos listados.",
                ];

                return response($response, 200);
            }

            $response = [
                'data' => $products,
                'message' => "No tienes productos."
            ];

            return response($response, 500);
        } catch (QueryException $exception) {
            $response = [
                'message' => "Error al listar productos.",
                'error' => $exception->getMessage(),
            ];

            return response($response, 500);
        }
    }

    public function getProductBySlug($slug)
    {
        try {
            $product = EcommerceProduct::where('slug', $slug)->firstOrFail();
            return $product;
        } catch (QueryException $exception) {
            $response = [
                'message' => "Error al listar producto.",
                'error' => $exception->getMessage(),
            ];

            return response($response, 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEcommerce_productRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EcommerceProduct $EcommerceProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EcommerceProduct $EcommerceProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEcommerce_productRequest $request, EcommerceProduct $EcommerceProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EcommerceProduct $EcommerceProduct)
    {
        //
    }
}
