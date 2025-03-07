@extends('layouts.app')

@section('content')
    <h2>Créer un Département</h2>

    <form action="{{ route('departements.store') }}" method="POST">
        @csrf
        <label>Nom</label>
        <input type="text" name="name" required>

        <label>Manager</label>
        <select name="manager_id">
            <option value="">Aucun</option>
            @foreach($managers as $manager)
                <option value="{{ $manager->id }}">{{ $manager->name }}</option>
            @endforeach
        </select>

        <label>Description</label>
        <textarea name="description"></textarea>

        <button type="submit">Créer</button>
    </form>
@endsection
