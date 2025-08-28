<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;

use App\Models\grade;
use Illuminate\Http\Request;

class gradeController extends Controller  
{
    public function index()
    { 
        $data['grades'] = Grade::get();
        return view('backend.pages.grade', $data);
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Grade::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('backend.grade.index')->with('success', 'Product Grade created successfully.');
    }
}
