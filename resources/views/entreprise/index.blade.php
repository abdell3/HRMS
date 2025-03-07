@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Entreprises</h1>
    <a href="{{ route('entreprises.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Créer une Entreprise</a>
    <div class="mt-6">
        @foreach ($entreprises as $entreprise)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h2 class="text-xl font-semibold">{{ $entreprise->nom }}</h2>
                <p>{{ $entreprise->secteur_activite }}</p>
                <div class="mt-2">
                    <a href="{{ route('entreprises.show', $entreprise->id) }}" class="text-blue-500">Voir</a>
                    <a href="{{ route('entreprises.edit', $entreprise->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                    <form action="{{ route('entreprises.destroy', $entreprise->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection