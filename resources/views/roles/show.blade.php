@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Rôle : {{ $role->name }}</h1>
        
        <p><strong>Nom :</strong> {{ $role->name }}</p>
        <p><strong>Description :</strong> {{ $role->description }}</p>

        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning">Modifier</a>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Retour à la liste</a>
    </div>
@endsection
