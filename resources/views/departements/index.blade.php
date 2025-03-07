@extends('layouts.app')

@section('content')
    <h2>Liste des Départements</h2>
    <a href="{{ route('departements.create') }}" class="btn btn-primary">Créer un Département</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Manager</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departements as $departement)
                <tr>
                    <td>{{ $departement->name }}</td>
                    <td>{{ $departement->manager?->name ?? 'Aucun' }}</td>
                    <td>{{ $departement->description }}</td>
                    <td>
                        <a href="{{ route('departements.show', $departement) }}" class="btn btn-info">Voir</a>
                        <a href="{{ route('departements.edit', $departement) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('departements.destroy', $departement) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
