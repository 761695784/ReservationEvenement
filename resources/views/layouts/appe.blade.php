<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('css/evenement_association.css') }}" rel="stylesheet">
    <title>Gestion d'évènement et de réservation</title>
</head>
<body>
    <header>
        <nav class="sticky-top">
            <div class="nav-container">
                <div class="nav-logo">
                    <a style="font-weight:700;font-size:30px;" href="/">Nom evenement</a>
                </div>
                <ul class="nav-links">
                    <li><a style=" font-weight:400;font-size:24px;" href="{{ url('/') }}">Accueil</a></li>
                    <li><a style=" font-weight:400;font-size:24px;"  href="/categories">Évènements</a></li>
                </ul>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    @guest<a href="/login" class="btn  btn-sm" style=" font-weight:400;font-size:16px;  background-color:#ffffff;
                    color:#333;">Espace perso</a>@endguest
                    @auth<a href="#" onclick="document.getElementById('logout-form').submit()" class="btn  btn-sm" style=" font-weight:400;font-size:16px; background-color:#ffffff;
                    color:#333;">
                    <form action="/logout" action="post" id="logout-form">@csrf</form>
                     Se Déconnecter
                     </a>@endauth
                    <!--<form class="form-inline my-2 my-lg-0 ml-auto" action="{*{ route('livres.search') }}" method="GET">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher un livre" aria-label="Rechercher" name="query">
                    </form>-->
            </div>
        </nav>    
        </header>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>