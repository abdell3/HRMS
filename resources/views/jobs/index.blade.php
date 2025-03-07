@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Jobs</h1>
    <a href="{{ route('jobs.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Créer un Job</a>
    <div class="mt-6">
        @foreach ($jobs as $job)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h2 class="text-xl font-semibold">{{ $job->titre }}</h2>
                <p><strong>Département :</strong> {{ $job->departement->nom }}</p>
                <p><strong>Salaire :</strong> {{ $job->salaire_min }} - {{ $job->salaire_max }}</p>
                <p><strong>Type de contrat :</strong> {{ $job->type_contrat }}</p>
                <p><strong>Statut :</strong> {{ $job->statut }}</p>
                <div class="mt-2">
                    <a href="{{ route('jobs.show', $job->id) }}" class="text-blue-500">Voir</a>
                    <a href="{{ route('jobs.edit', $job->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" class="inline">
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