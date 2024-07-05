<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/navbar1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
    <style>
        .bg-custom-orange {
            background-color: #E67E22;
        }
        .hover-bg-custom-orange:hover {
            background-color: #D35400;
        }

        .col p {
            text-align: center;
        }

        .btn-orange {
            border: 1px solid black;
            padding: 1% 20%;
        }

        .qui-sommes-nous {
            margin-top: 5%;
            display: flex;
            margin-left: 10%;
            align-items: center;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 1000px;
            margin: 0 10%;
            padding: 20px;
        }

        .grid-item {
            background-color: #fff;
        }

        .grid-item img {
            max-width: 100%;
            height: auto;
        }

        .image1 {
            margin-top: -25px;
            margin-left: -20px;
        }

        .text-orange {
            color: #f77d00;
        }

        .description {
            width: 380px;
            font-size: 18px;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            margin-left: 20%;
        }

        .contact-form .form-group {
            margin-bottom: 15px;
            display: flex;
            flex-direction: column;
        }

        .adresse {
            display: flex;
        }

        .adresse :first-child {
            margin-right: 5%;
            width: 90%;
        }

        .adresse :last-child {
            width: 97%;
        }

        .contact-form button {
            background-color: #f77d00;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        .contact-form button:hover {
            background-color: #d66b00;
        }

        .contact-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 15%;
        }

        label {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1%;
        }

        .text-center {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <div class="relative bg-gradient-to-r from-purple-600 to-blue-600 h-screen text-white overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Background Image" class="object-cover object-center w-full h-full" />
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>
        <header>
            <nav class="sticky-top">
                <div class="nav-container">
                    <div class="nav-logo">
                        <a style="font-weight:700;font-size:30px;" href="/"><img src="{{ asset('storage/images/logo.png')}}" alt=""></a>
                    </div>
                    <ul class="nav-links">
                        <li class="{{ Route::is('/') ? 'active-link' : '' }}">
                            <a href="{{ url('/') }}">Accueil</a>
                        </li>
                        <li class="{{ Route::is('evenement.event') ? 'active-link' : '' }}">
                            <a href="/evenement/event">Évènements</a>
                        </li>
                    </ul>
                    <ul class="contact">
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="relative z-10 flex flex-col justify-center items-center h-full text-center">
            <h1 class="text-5xl font-bold leading-tight mb-4">Unique et parfait</h1>
            <p class="text-lg text-gray-300 mb-8">Nous offrons à nos clients la meillleure plateforme de réservation d’événements</p>
            <a href="#" class="bg-custom-orange text-white hover-bg-custom-orange py-2 px-6 rounded-full text-lg font-semibold transition duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg">Réservez maintenant</a>
        </div>
    </div>

    <!-- Categories Section -->
    <div class="row mb-5 mt-5 ml-40">
        <div class="col">
            <img src="{{ asset('storage/images/divertissement.png') }}" class="category-img" alt="Category 1">
            <div class="text-center mr-40">
                <p>Divertissement</p>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('storage/images/conference.png') }}" class="category-img" alt="Category 1">
            <div class="text-center mr-40">
                <p>Conference</p>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('storage/images/musique.png') }}" class="category-img" alt="Category 1">
            <div class="text-center mr-40">
                <p>Musique</p>
            </div>
        </div>
        <div class="col">
            <img src="{{ asset('storage/images/tech.png') }}" class="category-img" alt="Category 1">
            <div class="text-center mr-40">
                <p>Tech</p>
            </div>
        </div>
    </div>

    <!-- Event Cards -->
    <div class="row">
        @foreach($evenements as $evenement)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/' . $evenement->image) }}" class="card-img-top event-img" alt="Event Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $evenement->nom }}</h5>
                    <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                        <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg height="13px" width="13px" viewBox="0 0 512 512">
                                <g>
                                    <g>
                                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1">{{ $evenement->date_evenement }}</span>
                        </span>

                        <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.66304 14.2366 10.2989 13.7678 10.7678C13.2989 11.2366 12.663 11.5 12 11.5ZM4.5 18.5C4.5 15.67 9 14.025 12 14.025C15 14.025 19.5 15.67 19.5 18.5V19.5H4.5V18.5Z" fill="black"/>
                            </svg>

                        </span>
                    </div>
                    <p class="card-text">{{ $evenement->description }}</p>
                    <a href="#" class="btn btn-primary">Réservez maintenant</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Grid Section -->
    <div class="grid-container">
        <div class="grid-item">
            <div class="qui-sommes-nous">
                <img src="{{ asset('storage/images/interrogation.png') }}" class="image1" alt="Image1">
                <p class="text-orange">Qui sommes-nous?</p>
            </div>
            <p class="description">
                Nous sommes une entreprise spécialisée dans l'organisation d'événements. Notre mission est de vous offrir des expériences uniques et mémorables.
            </p>
        </div>
        <div class="grid-item">
            <div class="qui-sommes-nous">
                <img src="{{ asset('storage/images/puzzle.png') }}" class="image1" alt="Image2">
                <p class="text-orange">Notre mission</p>
            </div>
            <p class="description">
                Offrir à nos clients des événements sur mesure, adaptés à leurs besoins et à leurs attentes, tout en garantissant un service de qualité.
            </p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="contact-container">
        <div class="contact-image">
            <img src="{{ asset('storage/images/contact.jpg') }}" alt="Contact Image">
        </div>
        <div class="contact-form">
            <h2>Contactez-nous</h2>
            <form method="post" action="#">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="adresse">
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" required>
                    </div>
                    <div class="form-group">
                        <label for="sujet">Sujet</label>
                        <input type="text" class="form-control" id="sujet" name="sujet" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>
