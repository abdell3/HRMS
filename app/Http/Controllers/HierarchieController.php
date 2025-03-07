<?php

namespace App\Http\Controllers;

use App\Models\Hierarchie;
use App\Http\Requests\StoreHierarchieRequest;
use App\Http\Requests\UpdateHierarchieRequest;

class HierarchieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hierarchies = Hierarchie::all();
        return view('hierarchies.index', compact('hierarchies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHierarchieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Hierarchie $hierarchie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hierarchie $hierarchie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHierarchieRequest $request, Hierarchie $hierarchie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hierarchie $hierarchie)
    {
        //
    }
}
