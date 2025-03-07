@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Modifier le département</h2>
    <form action="{{ route('departements.update', $departement->id) }}" method="POST" class="space-y-4 bg-white p-6 shadow rounded-lg">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
            <input type="text" name="name" id="name" value="{{ old('name', $departement->name) }}" class="mt-1 p-2 w-full border rounded-lg">
        </div>

        <div>
            <label for="manager" class="block text-sm font-medium text-gray-700">Manager</label>
            <input type="text" name="manager" id="manager" value="{{ old('manager', $departement->manager) }}" class="mt-1 p-2 w-full border rounded-lg">
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" class="mt-1 p-2 w-full border rounded-lg">{{ old('description', $departement->description) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Mettre à jour</button>
    </form>
</div>
@endsection
