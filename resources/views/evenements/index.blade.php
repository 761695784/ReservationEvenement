@extends('layouts.appe')
<link href="{{ asset('css/evenement_association.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
        <h1>Nos évènements</h1>
 
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('evenements.create') }}" class="btn btn_ajout">Ajouter un évenement</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date</th>
                    <th>Lieu</th>
                    <th>Actions</th>
                    <th>Liste inscrit</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                    <tr>
                        <td>{{ $evenement->nom }}</td>
                        <td>{{ $evenement->date_evenement }}</td>
                        <td>{{ $evenement->lieu }}</td>
                        <td>
                            <a href="{{ route('evenements.show', $evenement->id) }}" class="btn action">
                                <i class="fas fa-eye"></i></a>   
                            <a href="{{ route('modifier', $evenement->id) }}" class="btn action">
                                <i class="fas fa-edit"></i></a>
                            <form action="{{ route('evenements.destroy', $evenement->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn action">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <a href="#" class="stretched-link ">Voir la liste</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
