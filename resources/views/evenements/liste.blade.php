@extends('layouts.sidebare_association')
@section('content')
<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD IN LARAVEL 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        body {
            font-family: Arial, sans-serif;
        }


        .form-group {
            margin-bottom: 1.5rem;
        }

        .btn-warning {
            width: 100%;
        }

        .table-container {
            margin: 20px 0;
        }

        .table {
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="row">
        <div class="col">
            <hr>
            <a href="{{route('evenements.ajouter')}}" class="btn prod1">Ajouter des Evénements</a>
            <hr>

            @if(session('etat'))
                <div class="alert alert-warning">
                    {{ session('etat') }}
                </div>
            @endif
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            {{-- <th>Image</th> --}}
                            <th>Nom de l'événement</th>
                            {{-- <th>Description</th> --}}
                            <th>Date de l'événement</th>
                            <th>Lieu</th>
                            <th>Nombre de places</th>
                            {{-- <th>Date Limite</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($evenements as $evenement)
                            <tr>
                                {{-- <td><img src="{{ asset('storage/' . $evenement->image) }}" alt="{{ $evenement->nom }}" height="40"></td> --}}
                                <td>{{ $evenement->nom }}</td>
                                {{-- <td>{{ $evenement->description }}</td> --}}
                                <td>{{ $evenement->date_evenement }}</td>
                                <td>{{ $evenement->lieu }}</td>
                                <td>{{ $evenement->nombre_place }}</td>
                                {{-- <td>{{ $evenement->dernier_delai }}</td> --}}
                                <td>
                                    <a href="{{ route('evenements.details.association', $evenement->id) }}" class="btn action">
                                        <i class="fas fa-eye">Details</i></a>

                                    <a href="{{route('evenements.edit', $evenement->id)}}" class="icon" title="Modifier">
                                        <i class="fa fa-edit">Modifier</i>
                                    </a>
                                    <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="icon btn btn-link p-0" title="Supprimer" style="color: inherit;">
                                            <i class="fas fa-trash-alt">Supprimer</i>
                                        </button>
                                    </form>
                                    <a href="#" class="icon" title="Voir les détails" data-bs-toggle="modal" data-bs-target="#detailsModal" data-id="{{$evenement->id}}">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="evenements/{{$evenement->id}}/inscrits" class="insc">Voir la liste</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var detailsModal = document.getElementById('detailsModal');
        detailsModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var productId = button.getAttribute('data-id');

            // Faire une requête AJAX pour obtenir les détails du evenement
            fetch('/evenement/details/' + productId)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('modalContent').innerHTML = data;
                });
        });
    });
</script>
</body>
</html>
</x-app-layout>
