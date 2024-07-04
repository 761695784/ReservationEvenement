<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÉVÉNEMENTS</title>
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

        .col p{
            text-align: center;
            margin-left: 0;
        }
        .btn-orange{
            border: 1px solid black;
            padding: 1% 20% 1% 20%;
        }

        /* section qui sommes nous */

        .qui-sommes-nous{
            margin-top: 5%;
            display: flex;
            margin-left: 10%;
            align-items: center;
            
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
            gap: 20px;
            max-width: 1000px;
            margin: 0 10%;
            padding: 20px;
        }

        .grid-item {
            padding: -15%;
            background-color: #fff;
        }

        .grid-item img {
            max-width: 100%;
            height: auto;
            /* border-radius: 8px; */
        }

        .image1{
            margin-top: -25px;
            margin-left: -20px;

        }

        .text-orange {
            color: #f77d00;
        }

        .description {
            width: 50%;
            font-size: 18px;
            width: 380px;
        }


        /* section contact */
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            /* border-radius: 8px; */
            /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            /* margin-top: 5%; */
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

        .adresse :first-child{
            margin-right: 5%;
            width: 90%;
        }

        .adresse :last-child{
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

        label{
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 1%;
        }
.text-center{
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
                <ul class=contact>
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

         {{-- section categories --}}

         <!-- Categories Section -->
 <div class="row mb-5 mt-5 ml-40">
 <div class="col">
 <img src="{{ asset('storage/images/divertissement.png') }}"class="category-img" alt="Category 1">
 <div class="text-center mr-40">
 <p>Divertissement</p>
</div>
 </div>
 <div class="col">
 <img src="{{ asset('storage/images/conference.png') }}"class="category-img" alt="Category 1">
 <div class="text-center mr-40">
    <p>Conference</p>
   </div> </div>
 <div class="col">
 <img src="{{ asset('storage/images/musique.png') }}"class="category-img" alt="Category 1">
 <div class="text-center mr-40">
    <p>Musique</p>
   </div> </div>
 <div class="col">
 <img src="{{ asset('storage/images/tech.png') }}"class="category-img" alt="Category 1">
 <div class="text-center mr-40">
    <p>Tech</p>
   </div> </div>
 </div>

{{-- section evenements --}}
 <!-- Event Cards -->
 <div class="row">
    @foreach($evenements as $evenement)
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{ asset('storage/' . $evenement->image) }}" class="card-img-top event-img" alt="Event Image">
            <div class="card-body">
                <h5 class="card-title">{{ $evenement->nom }}</h5>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-1">{{ $evenement->date_evenement }}</span>
                    </span>
            
                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 11.5C11.337 11.5 10.7011 11.2366 10.2322 10.7678C9.76339 10.2989 9.5 9.66304 9.5 9C9.5 8.33696 9.76339 7.70107 10.2322 7.23223C10.7011 6.76339 11.337 6.5 12 6.5C12.663 6.5 13.2989 6.76339 13.7678 7.23223C14.2366 7.70107 14.5 8.33696 14.5 9C14.5 9.3283 14.4353 9.65339 14.3097 9.95671C14.1841 10.26 13.9999 10.5356 13.7678 10.7678C13.5356 10.9999 13.26 11.1841 12.9567 11.3097C12.6534 11.4353 12.3283 11.5 12 11.5ZM12 2C10.1435 2 8.36301 2.7375 7.05025 4.05025C5.7375 5.36301 5 7.14348 5 9C5 14.25 12 22 12 22C12 22 19 14.25 19 9C19 7.14348 18.2625 5.36301 16.9497 4.05025C15.637 2.7375 13.8565 2 12 2Z" fill="black"/>
                        </svg>
                        <span class="ml-1">{{ $evenement->lieu }}</span>
                    </span>
                </div>
            </div>
                <a href="#" class="btn btn-primary">Détails</a>
                <a href="{{ route('evenement.reserver', ['evenement' => $evenement->id]) }}" class="btn btn-secondary">S'inscrire</a>
            </div>
        </div>
    </div>
  
    @endforeach
</div>

<div class="text-center mt-4">
    <button class="btn btn-orange">Voir plus</button>
</div>

{{-- section valeurs --}}

<div class="h-full  w-full bg-gray-800 pt-40 pb-12 p-4 mt-5">
  <div class="grid gap-14 md:grid-cols-3 md:gap-5">
    <div class="rounded-xl bg-white p-6 text-center shadow-xl">
      <div
        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
        <svg viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
          <path
            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
            fill="white"></path>
        </svg>
      </div>
      <h1 class="text-darken mb-3 text-xl font-medium lg:px-14">CREATIVITE</h1>
      <p class="px-4 text-gray-500">Lorem Ipsum is simply dummy
        text of the printing and typesetting
        industry. Lorem Ipsum has been
        the industry's standard dummy
        text ever since the 1500s,</p>
    </div>
    <div data-aos-delay="150" class="rounded-xl bg-white p-6 text-center shadow-xl">
      <div
        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-rose-500 shadow-rose-500/40"">
          <svg viewBox=" 0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
        <path
          d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
          fill="#F5F5FC"></path>
        <path
          d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
          fill="#F5F5FC"></path>
        <path
          d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
          fill="#F5F5FC"></path>
        <path
          d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
          fill="#F5F5FC"></path>
        <path
          d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
          fill="#F5F5FC"></path>
        <path
          d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
          fill="#F5F5FC"></path>
        <path
          d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
          fill="#F5F5FC"></path>
        <path
          d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
          fill="#F5F5FC"></path>
        <path
          d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
          fill="#F5F5FC"></path>
        <path
          d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
          fill="#F5F5FC"></path>
        <path
          d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
          fill="#F5F5FC"></path>
        <path
          d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"
          fill="#F5F5FC"></path>
        </svg>
      </div>
      <h1 class="text-darken mb-3 text-xl font-medium lg:px-14 ">INNOVATION</h1>
      <p class="px-4 text-gray-500">Lorem Ipsum is simply dummy
text of the printing and typesetting
industry. Lorem Ipsum has been
the industry's standard dummy
text ever since the 1500s,</p>
    </div>
    <div data-aos-delay="300" class="rounded-xl bg-white p-6 text-center shadow-xl">
      <div
        class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-sky-500 shadow-sky-500/40">
        <svg viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
          <path
            d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"
            fill="white"></path>
        </svg>
      </div>
      <h1 class="text-darken mb-3 text-xl font-medium lg:px-14 ">EFFICACITE</h1>
      <p class="px-4 text-gray-500">Lorem Ipsum is simply dummy
text of the printing and typesetting
industry. Lorem Ipsum has been
the industry's standard dummy
text ever since the 1500s,</p>
    </div>
  </div>

</div>
{{-- 
section qui sommes nous? --}}

<div class="container mt-5 qui-sommes-nous">
    <div class="grid-container">
        <div class="grid-item image1">
            <img src="{{ asset('storage/images/image1.png') }}" alt="Image 1"  height="242" width="242">
        </div>
        <div class="grid-item image1">
            <img src="{{ asset('storage/images/image2.png') }}" alt="Image 2" height="242" width="242">
        </div>
        <div class="grid-item image1">
            <img src="{{ asset('storage/images/image3.png') }}" alt="Image 3" height="242" width="242">
        </div>
        <div class="grid-item image1">
            <img src="{{ asset('storage/images/image4.png') }}" alt="Image 4" height="242" width="242">
        </div>
    </div>
    <div class="description">
        <h2 class="text-orange">QUI SOMMES-NOUS ?</h2>
        <p>
            Notre Plateforme de Gestion de Réservations pour Événements est une solution innovante conçue pour simplifier et optimiser le processus de réservation et de gestion d'événements. Nous sommes une équipe de professionnels passionnés par la technologie et l'événementiel, dédiés à offrir une expérience utilisateur exceptionnelle pour les organisateurs et les participants.
        </p>
    </div>
</div>

{{-- section contact --}}
<div class="container contact-container">
    <div class="contact-form">
        <h2 class="text-center">Contactez-nous</h2>
        <p class="text-center">Veuillez mettre vos coordonnées pour nous contacter</p>
        <form>
            <div class="adresse">
            <div class="form-group ">
                <label for="name">Nom de l'association</label>
                <input type="text" class="form-control" id="name" placeholder="Simplon Sénégal">
            </div>
            <div class="form-group">
                <label for="location">Adresse de localisation</label>
                <input type="text" class="form-control" id="location" placeholder="Sacré Coeur 2">
            </div>
        </div>
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control" id="email" placeholder="email@janesfakedomain.net">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="4" placeholder="Veuillez décrire votre association en quelques lignes"></textarea>
            </div>
            <button type="submit" class="btn btn-orange">Envoyer</button>
        </form>
    </div>
    <div class="contact-image">
        <img src="{{ asset('storage/images/image8.png') }}" alt="Image 8" >
    </div>
</div>
<footer>
  <div class="avant_footer">
      <div class="joindre">
        <div class="nav-logo">
          <a style="font-weight:700;font-size:30px;" href="/"><img src="{{ asset('storage/images/logo3.png')}}" alt=""></a>
      </div>          <h4>Vous pouvez nous suivre</h4>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
