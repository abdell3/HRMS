<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Http\Requests\StoreEntrepriseRequest;
use App\Http\Requests\UpdateEntrepriseRequest;
use Dotenv\Parser\Entry;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entreprise = Entreprise::all();
        return view('entreprises.index', compact('entreprises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('entreprises.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrepriseRequest $request)
    {
        Entreprise::create($request->validated());
        return redirect()->route('entreprises.index')->with('success', 'Entreprise bien créer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Entreprise $entreprise)
    {
        return view('entreprises.show', compact('entreprise'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entreprise $entreprise)
    {
        return view('entreprises.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrepriseRequest $request, Entreprise $entreprise)
    {
        $entreprise->update($request->validated());
        return redirect()->route('entreprises.index')->with('success', 'Entreprise bien modifier');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entreprise $entreprise)
    {
        $entreprise->delete();
        return redirect()->route('entreprises.index')->with('Entreprise bien supprimée');
    }
}
