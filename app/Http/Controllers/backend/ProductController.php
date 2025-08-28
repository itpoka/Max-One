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

function product_update(Request $request)
{
      $request->validate([
        'id' => 'required|exists:prodcuts,id',
        'name' => 'required|string|max:255',
        'oil_type_id' => 'required|integer|exists:oil_types,id',
        'oil_category_id' => 'required|integer|exists:oil_categories,id',
        'grade_id' => 'required|integer|exists:grades,id',
        'size' => 'required|string|max:50',
        'measurement_unit' => 'required|string|max:50',
        'launch_date' => 'required|date',
        'purchase_price' => 'required|numeric',
        'sell_price' => 'required|numeric',
        'discount_price' => 'nullable|numeric',
        'point' => 'nullable|integer',
    ]);



     $product = Prodcut::find($request->id);

    $product->name = $request->name;
    $product->oil_type_id = $request->oil_type_id;
    $product->oil_category_id = $request->oil_category_id;
    $product->grade_id = $request->grade_id;
    $product->size = $request->size;
    $product->measurement_unit = $request->measurement_unit;
    $product->launch_date = $request->launch_date;
    $product->purchase_price = $request->purchase_price;
    $product->sell_price = $request->sell_price;
    $product->discount_price = $request->discount_price;
    $product->point = $request->point;
    $product->description = $request->description;

    // Save the product
    $product->save();

     return redirect()->back()->with('success', 'Product updated successfully!');
}

public function product_delete($id)
{
    Prodcut::where('id', $id)->delete();
    return redirect()->back()->with('success', 'Product deleted successfully!');
}



}



  