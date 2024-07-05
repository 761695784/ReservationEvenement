<x-app-layout>
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Liste des événements</h2>
    <div class="row">
        @foreach($evenements as $evenement)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $evenement->image) }}" class="card-img-top" alt="Image de l'événement">
                <div class="card-body">
                    <h5 class="card-title">{{ $evenement->nom }}</h5>
                    <p class="card-text">{{ $evenement->description }}</p>
                    <a href="{{ route('events.show', $evenement->id) }}" class="btn btn-primary">Voir les détails</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
</x-app-layout>
