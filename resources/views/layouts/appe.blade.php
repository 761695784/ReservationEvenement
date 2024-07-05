<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <title>Gestion d'évènement et de réservation</title>
</head>
<body>
    <header>
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
    </header>
    <main>
        @yield('content')
    </main>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>