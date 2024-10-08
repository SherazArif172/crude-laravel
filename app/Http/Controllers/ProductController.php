<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::latest()->paginate(5);

        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation
        $validated = $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        // create a new product in database
        Product::create($request->all());

        //redirect the user
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //

        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
        // validation
        $validated = $request->validate([
            'name' => 'required',
            'details' => 'required',
        ]);

        // create a new product in database
        $product->update($request->all());

        //redirect the user
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //
        $product->delete();
        return redirect()->route('products.index');
    }
}
