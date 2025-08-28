<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Prodcut;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index()
    {
        $products = Prodcut::all(); // fetch all products
     
        return view('backend.pages.product', compact('products'));
    }

public function create(Request $request)
{

    //dd($request->all());
    $request->validate([
        'oil_type_id'       => 'required|integer',
        'oil_category_id'   => 'required|integer',
        'grade_id'          => 'required|integer',
        'name'              => 'required|string|max:255',
        'size'              => 'required|string|max:50',
        'measurement_unit'  => 'required|string|max:50',
        'sell_price'        => 'nullable|numeric|min:0',
        'discount_price'    => 'nullable|numeric|min:0',
        'purchase_price'    => 'nullable|numeric|min:0',
        'description'       => 'nullable|string|max:500',
        'launch_date'       => 'nullable|date',
        'point'             => 'nullable|integer',
    ]);

    Prodcut::create([
        'oil_type_id'       => $request->input('oil_type_id'),
        'oil_category_id'   => $request->input('oil_category_id'),
        'grade_id'          => $request->input('grade_id'),
        'name'              => $request->input('name'),
        'size'              => $request->input('size'),
        'measurement_unit'  => $request->input('measurement_unit'),
        'sell_price'        => $request->input('sell_price'),
        'discount_price'    => $request->input('discount_price'),
        'purchase_price'    => $request->input('purchase_price'),
        'description'       => $request->input('description'),
        'launch_date'       => $request->input('launch_date'),
        'point'             => $request->input('point'),
    ]);

    return redirect()->route('backend.product.index')
                     ->with('success', 'Product Grade created successfully.');
}


}



  