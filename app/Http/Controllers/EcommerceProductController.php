<?php

namespace App\Http\Controllers;

use App\Models\Ecommerce_product;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEcommerce_productRequest;
use App\Http\Requests\UpdateEcommerce_productRequest;

class EcommerceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Ecommerce_product $ecommerce_product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ecommerce_product $ecommerce_product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEcommerce_productRequest $request, Ecommerce_product $ecommerce_product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ecommerce_product $ecommerce_product)
    {
        //
    }
}
