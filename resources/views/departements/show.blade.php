@extends('layouts.app')

@section('content')
    <h2>{{ $departement->name }}</h2>
    <p>Manager : {{ $departement->manager?->name ?? 'Aucun' }}</p>
    <p>Description : {{ $departement->description }}</p>
    <a href="{{ route('departements.index') }}">Retour</a>
@endsection
