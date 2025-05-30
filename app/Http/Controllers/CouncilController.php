<?php

namespace App\Http\Controllers;

use App\Models\Council;
use Illuminate\Http\Request;

class CouncilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $councils = Council::all();

        return view('councils.index', compact('councils'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('councils.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Council::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'is_active' => $request->input('is_active'),
        ]);

        return redirect()->route('councils.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Council $council)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Council $council)
    {
        return view('councils.edit', compact('council'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Council $council)
    {
        $council->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'is_active' => $request->input('is_active'),
        ]);

        return redirect()->route('councils.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Council $Council)
    {
        $Council->delete();

        return redirect()->route('councils.index');
    }
}
