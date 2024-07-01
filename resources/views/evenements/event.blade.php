<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    background-color: #f8f9fa;
}

.navbar-brand {
    font-weight: bold;
}

.btn-orange {
    background-color: #f77d00;
    border: none;
}

.btn-orange:hover {
    background-color: #d66b00;
}

.card {
    border-radius: 8px;
}

.card-title {
    color: #f77d00;
}

footer {
    background-color: #f77d00;
    color: white;
}

footer a {
    color: white;
    margin: 0 10px;
}

footer form .form-control {
    width: auto;
}

footer form .btn-orange {
    background-color: white;
    color: #f77d00;
    border: 1px solid white;
}

footer form .btn-orange:hover {
    background-color: #d66b00;
    border: 1px solid #d66b00;
}

h5 {
    font-weight: bold;
}
.card-img-top {
        height: 200px; /* Hauteur souhaitée */
        object-fit: cover; /* Pour conserver les proportions et couper l'image si nécessaire */
    }

</style>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Nom du plateforme</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Événements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-orange text-white" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="text-center mb-4">
            <img src="path-to-header-image.jpg" class="img-fluid" alt="Header Image">
            <h1 class="mt-3">ÉVÉNEMENTS</h1>
        </div>

        <div class="row">
            @foreach($evenements as $evenement)
            <!-- Example of an event card, repeat for each event -->
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card">
                    <img src="{{ asset('storage/' . $evenement->image) }}" class="card-img-top" alt="Event Image">
                    <div class="card-body">
                        <h5 class="card-title">{{$evenement->nom}}</h5>
                        <p class="card-text">{{$evenement->date_evenement }}</p>
                        <p class="card-text">{{$evenement->lieu}}</p>
                        <a href="#" class="btn btn-primary">Détails</a>
                        <a href="/login" class="btn btn-secondary">S'inscrire</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Repeat the above block for each event -->
        </div>

        <div class="text-center mt-4">
            <button class="btn btn-orange">Voir plus</button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="mt-5 bg-light py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h5>Nom du plateforme</h5>
                </div>
                <div class="col-md-4">
                    <p>Abonnez-vous à notre newsletter pour ne rien rater de nos nouvelles</p>
                    <form class="form-inline justify-content-center">
                        <input type="email" class="form-control mb-2 mr-sm-2" placeholder="Votre adresse email">
                        <button type="submit" class="btn btn-orange mb-2">S'abonner</button>
                    </form>
                </div>
                <div class="col-md-4">
                    <h5>Vous pouvez nous suivre</h5>
                    <a href="#"><img src="path-to-facebook-icon.png" alt="Facebook"></a>
                    <a href="#"><img src="path-to-twitter-icon.png" alt="Twitter"></a>
                    <a href="#"><img src="path-to-instagram-icon.png" alt="Instagram"></a>
                    <a href="#"><img src="path-to-youtube-icon.png" alt="YouTube"></a>
                </div>
            </div>
            <div class="mt-3">
                <p>&copy; 2024</p>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
