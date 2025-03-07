@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{ $job->titre }}</h1>
    <div class="bg-white shadow-md rounded-lg p-4">
        <p><strong>Description :</strong> {{ $job->description }}</p>
        <p><strong>Département :</strong> {{ $job->departement->nom }}</p>
        <p><strong>Salaire :</strong> {{ $job->salaire_min }} - {{ $job->salaire_max }}</p>
        <p><strong>Type de contrat :</strong> {{ $job->type_contrat }}</p>
        <p><strong>Statut :</strong> {{ $job->statut }}</p>
        <div class="mt-4">
            <a href="{{ route('jobs.edit', $job->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Modifier</a>
            <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection