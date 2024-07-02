@extends('layouts.appe')
@section('content')

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

    @endsection