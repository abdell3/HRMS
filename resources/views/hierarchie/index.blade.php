@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Hiérarchies</h1>
    <a href="{{ route('hierarchies.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Créer une Hiérarchie</a>
    <div class="mt-6">
        @foreach ($hierarchies as $hierarchie)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">
                <h2 class="text-xl font-semibold">{{ $hierarchie->employe->nom }} - {{ $hierarchie->manager->nom }}</h2>
                <div class="mt-2">
                    <a href="{{ route('hierarchies.show', $hierarchie->id) }}" class="text-blue-500">Voir</a>
                    <a href="{{ route('hierarchies.edit', $hierarchie->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                    <form action="{{ route('hierarchies.destroy', $hierarchie->id) }}" method="POST" class="inline">
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