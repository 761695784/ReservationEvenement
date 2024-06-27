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

    .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        height: 100vh;
        padding-top: 20px;
    }

    .sidebar-heading {
        padding: 10px 15px;
        font-size: 1.2rem;
    }

    .sidebar .nav-link {
        font-size: 1rem;
    }

    .sidebar .nav-link.active {
        color: #FF6600;
        font-weight: bold;
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
    <body>
        {{-- <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <h4 class="sidebar-heading">Nom Association</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    Evénements
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Historiques
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Settings
                                </a>
                            </li>
                        </ul>
                        <button class="btn btn-warning mt-4">Déconnexion</button>
                    </div>
                </nav> --}}

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <hr>
                <a href="evenement/ajouter" class="btn prod1">Ajouter des Evénements</a>
                <hr>
                @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Nom de l'événement</th>
                                <th>Description</th>
                                <th>Date de l'événement</th>
                                <th>Lieu</th>
                                <th>Nombre de places</th>
                                <th>Date Limite</th>
                                {{-- <th>Catégorie</th> --}}
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($evenements as $evenement)
                                <tr>
                                    <td><img src="{{ asset('storage/' . $evenement->image) }}" alt="{{ $evenement->nom }}" height="40"></td>
                                    <td>{{ $evenement->nom }}</td>
                                    <td>{{ $evenement->description }}</td>
                                    <td>{{ $evenement->date_evenement }}</td>
                                    <td>{{ $evenement->lieu }}</td>
                                    <td>{{ $evenement->nombre_place    }}</td>
                                    <td>{{ $evenement->dernier_delai }}</td>
                                    {{-- <td>{{ $evenement->categorie->libelle }}</td> --}}
                                    <td>
                                        <a href="{{route('modifier', $evenement->id)}}" class="icon" title="Modifier">
                                            {{-- /evenement/modifier/{{$evenement->id}} --}}
                                            <i class="fa fa-edit">Modifier</i>
                                        </a>

                                        <form action="" method="POST" style="display:inline-block;">
                                            {{-- {{ route('evenement.supprimer', $evenement->id) }} --}}
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="icon btn btn-link p-0" title="Supprimer" style="color: inherit;">
                                                <i class="fas fa-trash-alt">Supprimer</i>
                                            </button>
                                        </form>
                                        <a href="#" class="icon" title="Voir les détails" data-bs-toggle="modal" data-bs-target="#detailsModal" data-id="{{$evenement->id}}">
                                            <i class="fas fa-info-circle"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pour les détails -->
    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailsModalLabel">Détails du evenement</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Contenu dynamique des détails du evenement -->
                    <div id="modalContent"></div>
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
