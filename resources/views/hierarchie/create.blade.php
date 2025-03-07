@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Créer une Hiérarchie</h1>
    <form action="{{ route('hierarchies.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="employe_id" class="block text-gray-700">Employé</label>
            <select name="employe_id" id="employe_id" class="w-full px-4 py-2 border rounded" required>
                @foreach ($utilisateurs as $utilisateur)
                    <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="manager_id" class="block text-gray-700">Manager</label>
            <select name="manager_id" id="manager_id" class="w-full px-4 py-2 border rounded" required>
                @foreach ($utilisateurs as $utilisateur)
                    <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label for="position_hierarchique" class="block text-gray-700">Position hiérarchique</label>
            <input type="text" name="position_hierarchique" id="position_hierarchique" class="w-full px-4 py-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="date_ajout" class="block text-gray-700">Date d'ajout</label>
            <input type="date" name="date_ajout" id="date_ajout" class="w-full px-4 py-2 border rounded" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Créer</button>
    </form>
</div>
@endsection