<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <style>
        .banniere{
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2%;
        }
        .banniere img {
            margin-right: 10vh;
        }
        .button{
            background-color: #E67E22;
            width: auto;
            color: #f2f2f2;
            padding: 2vh;
            border: 1vh;
            border-radius: 1vh;
            justify-content: center;
            font-size: 15px;
        }
        .texteBanniere p{
            font-size: 32px;
            width: 458px;
        }

        .evenements{
            display: flex;
            justify-content: center;
            align-items: center;
            }
             h1 {
            text-align: center;
        }
        
        .event{
            background-image: url('{{ asset('storage/images/rectangle10.png') }}');
            background-repeat: no-repeat;
            
        }
        .evenements .texte {
            background-color: #f5f5f5;
            width: 29.5%;
            height: 16vh;
            font-size: 15px;
            margin-top: -1px;
            padding-top: 20px;
            color: gray;
            text-align: center;
            padding-left: 100px;
            padding-right: 90px;
        }
        .evenements .titre{
            background-color: #E67E22;
            color: #f2f2f2;
            width: 43.5%;
            padding:0.005vh 0.05vh 0.005vh 0.05vh;
            text-align: center;
            font-size: 14px;
            margin-top: 12%;
        }

        
        .detailsEvent{
            background-image: url('{{ asset('storage/images/rectangle10.png') }}');
            background-repeat: no-repeat;
            color:white;
            
        }

        .date{
            color: #f2f2f2;
            background-color: #f77d00;
            width: 3%;
            font-size: 17px;
        }

        .valeur{
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
        }

        .valeurs{
            margin-top: 20%;

        }

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
            margin-left: 10%;
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


     

</style>
</head>
<body>
    <div class="banniere">
    <div>
        <img src="{{ asset('storage/images/image5.png') }}" alt="banniere">
    </div>
    <div class="texteBanniere">
        <p>
            LES BONS MOMENTS SONT MEILLEURS LORSQU'ILS SONT PLANIFIES
        </p>
        <button class="button">Réserver maintenant</button>
    </div>
    </div>
    <h1>NOS EVENEMENTS PHARES</h1>
    <section class="Evenement"></section>
        <div class="evenements">
            <div class="event">
                <div class="image">
                    <p class="date">27 JUN</p>
                    <div class="titre">
                        <h3>SOIREE DE DISTINCTION DES ENTREPRISES</h3>
                    </div>
                </div>
                <div class="texte">
                    <p>Cet événement annuel réunit les leaders de l'industrie, les entrepreneurs influents, les décideurs politiques et les personnalités médiatiques pour une soirée de reconnaissance et de célébration.</p>
                </div>
           
        
                <div class="detailsEvent">
                    <h3>soirée de disctinction des entreprises</h3>
                    <div class="Detail">
                    <p><img src="{{ asset('storage/images/calendrier.png') }}" alt=""> 27 Juin 2024</p>
                    </div>
                    <div class="Detail">
                        <p><img src="{{ asset('storage/images/Vector.png') }}" alt=""> 27 Juin 2024</p>
                    </div>     
                    <div class="Detail">
                        <p><img src="{{ asset('storage/images/Vector2.png') }}" alt=""> 27 Juin 2024</p>
                </div>    </div>
            
        {{-- </div> --}}
<div class="valeurs">
        <h1>NOS VALEURS</h1>

        <div class="valeur">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/Vector.png') }}" class="card-img-top" alt="..." height="50" width="60">
                <div class="card-body">
                  <p class="card-text">Lorem Ipsum is simply dummy
                    text of the printing and typesetting
                    industry. Lorem Ipsum has been
                    the industry's standard dummy
                    text ever since the 1500s,</p>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/Vector-1.png') }}" class="card-img-top" alt="..." height="50" width="60">
                <div class="card-body">
                  <p class="card-text">Lorem Ipsum is simply dummy
text of the printing and typesetting
industry. Lorem Ipsum has been
the industry's standard dummy
text ever since the 1500s,</p>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="{{ asset('storage/images/Vector-2.png') }}" class="card-img-top" alt="..." height="50" width="60">
                <div class="card-body">
                  <p class="card-text">Lorem Ipsum is simply dummy
text of the printing and typesetting
industry. Lorem Ipsum has been
the industry's standard dummy
text ever since the 1500s,</p>
                </div>
              </div>
        </div>
    </div>

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
</body>
</html>