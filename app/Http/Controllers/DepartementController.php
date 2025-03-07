<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Http\Requests\StoreDepartementRequest;
use App\Http\Requests\UpdateDepartementRequest;
use App\Models\User;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departement =  Departement::with('manager')->get();
        return view('departements.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $managers = User::all();
        $employes = User::all();
        return view('departements.create', compact('managers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDepartementRequest $request)
    {
        Departement::create($request->validated());

        return redirect()->route('departements.index')->with('success', 'Département ajouté avec succès !');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        return view('departements.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        $managers = User::all();
        return view('departements.edit', compact('departement', 'managers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDepartementRequest $request, Departement $departement)
    {
        $departement->update($request->validated());

        return redirect()->route('departements.index')->with('success', 'Département mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        $departement->delete();
        return redirect()->route('departements.index')->with('success', 'Département supprimé avec succès !');
    }
}
