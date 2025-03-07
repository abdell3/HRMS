@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Créer un Job</h1>
    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="titre" class="block text-gray-700">Titre</label>
            <input type="text" name="titre" id="titre" class="w-full px-4 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea name="description" id="description" class="w-full px-4 py-2 border rounded"></textarea>
        </div>
        <div class="mb-4">
            <label for="departement_id" class="block text-gray-700">Département</label>
            <select name="departement_id" id="departement_id" class="w-full px-4 py-2 border rounded" required>
                @foreach ($departements as $departement)
                    <option value="{{ $departement->id }}">{{ $departement->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="salaire_min" class="block text-gray-700">Salaire minimum</label>
            <input type="number" name="salaire_min" id="salaire_min" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="salaire_max" class="block text-gray-700">Salaire maximum</label>
            <input type="number" name="salaire_max" id="salaire_max" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="type_contrat" class="block text-gray-700">Type de contrat</label>
            <input type="text" name="type_contrat" id="type_contrat" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="statut" class="block text-gray-700">Statut</label>
            <select name="statut" id="statut" class="w-full px-4 py-2 border rounded" required>
                <option value="actif">Actif</option>
                <option value="inactif">Inactif</option>
            </select>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Créer</button>
    </form>
</div>
@endsection