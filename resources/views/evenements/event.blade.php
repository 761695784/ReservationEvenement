
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Événements</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="{{ asset('css/event.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

</head>

<body>
    <style>
        .header-container {
            background-image:linear-gradient(rgba(224, 126, 34, 0.4), rgba(224, 126, 34, 0.4)),url('{{ asset('images/banner_event.png') }}');
            background-size: cover;
            background-position: center;
            color: white;
            width:100%;
            height:500px;
            position:relative;
        }
        .banner-content {
        text-align: center;
        color: #fff; /* Couleur du texte dans la bannière */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
}
        </style>
        <div class="header-container">
         <header class="header">
            <nav class="sticky-top">
            <div class="nav-container">
                <div class="nav-logo">
                    <img src="{{ asset('images/logo2.png') }}" alt="Logo" class="img-fluid" style="max-height: 100px;">
                </div>
                <ul class="nav-links">
                    <li class="{{ Route::is('/') ? 'active-link' : '' }}">
                        <a href="{{ url('/') }}">Accueil</a>
                    </li>
                    <li class="{{ Route::is('evenement.event') ? 'active-link' : '' }}">
                        <a href="/evenement/event">Évènements</a>
                    </li>
                </ul>
                <ul class=contact>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <div class="banner-content">
            <h1>ÉVÈNEMENTS</h1>
        </div>
            </header>
        </div>
    <div class="container mt-5">
        <div class="row">


            @foreach ($evenements as $evenement)
                <div class="col-md-4">
                    <div class="card">
                        {{--<img src="{{ $evenement->image }}" class="card-img-top" alt="Image de l'événement">--}}
                        <img src="{{ asset('storage/' . $evenement->image) }}" alt="{{ $evenement->nom }}" height="300">
                        <div class="card-body">
                            <h5 class="card-title">{{ $evenement->nom }}</h5>
                            <p class="card-text">{{ $evenement->date_evenement }}</p>
                            <p class="card-text">{{ $evenement->lieu }}</p>
                            <div class="btn-container">
                                <a href="#" class="btn btn1">Détails</a>
                                {{-- {{ route('evenement.details', $evenement->id) }} --}}
                                <a href="{{ route('evenement.reserver', ['evenement' => $evenement->id]) }}" class="btn btn2">Réserver</a>
                            </div>
                        </div>
                    </div>
{{-- =======
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
                        <a href="{{ route('evenement.reserver', ['evenement' => $evenement->id]) }}" class="btn btn-secondary">S'inscrire</a>                    </div>
>>>>>>> Oumyna --}}
                </div>
                @endforeach
        </div>
    </div>
    <footer>
        <div class="avant_footer">
            <div class="joindre">
                <h2>
                    <img src="{{ asset('images/logo2.png') }}" alt="">
                </h2>
                <h4>Vous pouvez nous suivre</h4>
                <div class="icone">
                    <img src="{{ asset('images/facebook.png') }}" alt="" width="40" height="40">
                    <img src="{{ asset('images/twitter.png') }}" alt=""  width="45" height="45">
                    <img src="{{ asset('images/instagram.png') }}" alt=""  width="40" height="40">
                    <img src="{{ asset('images/likedin.png') }}" alt=""  width="45" height="45">
                </div>
            </div>
            <div class="newsletter">
                <h4>Abonner vous à notre newsletter pour ne<br> rien rater de nos nouvelles</h4>
                <form action="" method="POST">
                    @csrf
                    <label for="email"></label>
                    <div class="input-group">
                        <input type="email" id="email" name="email" required placeholder="Votre adresse email">
                        <button type="submit" class="button_newsletter">S'abonner</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer_final">
            <div class="line"></div>
            <div class="copy">
                <p>Copyrigth</p>
                <img src="{{ asset('images/copyright.png') }}" alt="">
                <p>2024</p>
            </div>
            <div class="line"></div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
