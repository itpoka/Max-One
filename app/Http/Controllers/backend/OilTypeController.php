<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\OilType;
use App\Models\OilCategory;
use Illuminate\Http\Request;

class OilTypeController extends Controller
{
    //
    public function index()
    {
        $data['oil_types'] = OilType::where('is_active','1')->get();
        $data['oil_categories'] = OilCategory::where('is_active','1')->get();
        //dd($data);
        
        return view('backend.pages.oiltype',$data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        OilType::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('backend.oil.type.index')->with('success', 'Oil Type created successfully.');
    }

    public function oil_category_create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        OilCategory::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('backend.oil.type.index')->with('success', 'Oil Type created successfully.');

    }
}
