<?php

namespace App\Http\Controllers;

use App\Models\Aitool;
use App\Models\Category;
use Illuminate\Http\Request;

class AitoolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aitools = Aitool::all();
        return view('aitools.index', compact('aitools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('aitools.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hasFeePlan = $request->has('hasFeePlan');
        if($hasFeePlan){
            $request->merge(['hasFeePlan' => true]);
        }
        $request->validate(
            [
                'name' => 'required|min:3|max:30|string',
                'category_id' => 'required|exists:categories,id',
                'description' => 'required|string|min:5',
                'link' => 'required|url',
                'hasFeePlan' => 'boolean',
                'price' => 'numeric|nullable'
            ]
        );

        Aitool::create($request->all());
// git bash teszt hahahaha
        return redirect()->route('aitools.index')->with('success', 'Ai tool sikeresen létrehozva.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
