@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Modifier l'Entreprise</h1>
    <form action="{{ route('entreprises.update', $entreprise->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nom" class="block text-gray-700">Nom</label>
            <input type="text" name="nom" id="nom" class="w-full px-4 py-2 border rounded" value="{{ $entreprise->nom }}" required>
        </div>
        <div class="mb-4">
            <label for="secteur_activite" class="block text-gray-700">Secteur d'activité</label>
            <input type="text" name="secteur_activite" id="secteur_activite" class="w-full px-4 py-2 border rounded" value="{{ $entreprise->secteur_activite }}" required>
        </div>
        <div class="mb-4">
            <label for="logo" class="block text-gray-700">Logo</label>
            <input type="file" name="logo" id="logo" class="w-full px-4 py-2 border rounded">
        </div>
        <div class="mb-4">
            <label for="email_contact" class="block text-gray-700">Email de contact</label>
            <input type="email" name="email_contact" id="email_contact" class="w-full px-4 py-2 border rounded" value="{{ $entreprise->email_contact }}" required>
        </div>
        <div class="mb-4">
            <label for="telephone" class="block text-gray-700">Téléphone</label>
            <input type="text" name="telephone" id="telephone" class="w-full px-4 py-2 border rounded" value="{{ $entreprise->telephone }}" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Mettre à jour</button>
    </form>
</div>
@endsection