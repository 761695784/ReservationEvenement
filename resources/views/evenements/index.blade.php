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

        <a href="/evenements/create" class="btn btn-primary">Ajouter un évenement</a>
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
                            <a href="#" class="btn action">
                            {{-- {{ route('evenements.show', $evenement->id) }} --}}
                                <i class="fas fa-eye"></i></a>
                            <a href="#" class="btn action">
                                {{-- {{ route('modifier', $evenement->id) }} --}}
                                <i class="fas fa-edit"></i></a>
                            <form action="#" method="POST" style="display:inline-block;">
                                {{-- {{ route('evenements.destroy', $evenement->id) }} --}}
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
