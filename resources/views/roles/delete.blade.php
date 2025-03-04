@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Supprimer le Rôle : {{ $role->name }}</h1>
        
        <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <p>Êtes-vous sûr de vouloir supprimer ce rôle ?</p>
            
            <button type="submit" class="btn btn-danger">Oui, supprimer</button>
            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>
@endsection
