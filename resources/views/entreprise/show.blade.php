@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">{{ $entreprise->nom }}</h1>
    <div class="bg-white shadow-md rounded-lg p-4">
        <p><strong>Secteur d'activité :</strong> {{ $entreprise->secteur_activite }}</p>
        <p><strong>Email :</strong> {{ $entreprise->email_contact }}</p>
        <p><strong>Téléphone :</strong> {{ $entreprise->telephone }}</p>
        <div class="mt-4">
            <a href="{{ route('entreprises.edit', $entreprise->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Modifier</a>
            <form action="{{ route('entreprises.destroy', $entreprise->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection