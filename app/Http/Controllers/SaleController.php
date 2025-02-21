<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barcode = Str::random(10);
        $sale = new Sale();
        $sale->barcode = $barcode;
        $sale->total = $request->total;
        $sale->user_id = $request->user_id;
        $sale->save();

        $products = $request->products;

        // $sale->products()->sync($products, true);
        
        foreach ($products as $product) {
            $sale->products()->attach($product['product_id'], [
                'quantity' => $product['quantity']
            ]);
        }

        return response()->json(['message' => 'Venta creada con éxito', 'barcode' => $barcode]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
