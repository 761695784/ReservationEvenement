<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>


<style>
    body {
        background-color: #f8f9fa;
    }

    .text-orange {
        color: #f77d00;
    }

    .btn-orange {
        background-color: #f77d00;
        border: none;
    }

    .btn-orange:hover {
        background-color: #d66b00;
    }

    .img-fluid {
        border-radius: 8px;
        height: 100%;
    }

    .container {
        max-width: 900px;
    }

    h2 {
        margin-bottom: 20px;
    }
</style>
@if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <!-- Image de l'événement -->
                <img src="{{ asset('storage/' . $evenement->image) }}" class="img-fluid" alt="Table setting">
            </div>
            <div class="col-md-6">
                <h2 class="text-center text-orange">Reservation</h2>
                <form action="{{route('reservation.store')}}" method="POST">
                    @csrf
                    <!-- Champ caché pour l'ID de l'événement -->
                    <input type="hidden" name="evenement_id" value="{{ $evenement->id }}">

                    <!-- Champ caché pour l'ID de l'utilisateur (utilisation de auth()->id() pour récupérer l'ID de l'utilisateur authentifié) -->
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

                    <!-- Champ de nom complet en lecture seule -->
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" class="form-control" id="name" value="{{ auth()->user()->name }}" readonly>
                    </div>

                    <!-- Champ d'e-mail en lecture seule -->
                    <div class="form-group">
                        <label for="email">E-mail Address</label>
                        <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" readonly>
                    </div>

                    <!-- Champ de numéro de téléphone modifiable -->
                    <div class="form-group">
                        <label for="phone">Numero Telephone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->telephone }}" readonly>
                    </div>

                    <!-- Bouton de validation -->
                    <button type="submit" class="btn btn-orange btn-block">Valider</button>

                    <!-- Nombre de places disponibles -->
                    <p class="text-center mt-3">Nombre de places disponibles : <span class="text-danger">{{ $evenement->nombre_place }}</span></p>                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
