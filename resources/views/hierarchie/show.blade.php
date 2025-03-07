@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Détails de la Hiérarchie</h1>
    <div class="bg-white shadow-md rounded-lg p-4">
        <p><strong>Employé :</strong> {{ $hierarchie->employe->nom }} {{ $hierarchie->employe->prenom }}</p>
        <p><strong>Manager :</strong> {{ $hierarchie->manager->nom }} {{ $hierarchie->manager->prenom }}</p>
        <p><strong>Position hiérarchique :</strong> {{ $hierarchie->position_hierarchique }}</p>
        <p><strong>Date d'ajout :</strong> {{ $hierarchie->date_ajout }}</p>
        <div class="mt-4">
            <a href="{{ route('hierarchies.edit', $hierarchie->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Modifier</a>
            <form action="{{ route('hierarchies.destroy', $hierarchie->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded ml-2">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection