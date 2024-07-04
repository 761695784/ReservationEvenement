<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cérémonie d'Hommage aux Lébous</title>
    <style>

        .event-header {
            font-size: 30px;
            font-weight: bold;
            color: #E67E22;
            text-align: center;
            margin-top: 20px;
        }
        .event-details {
            margin: 20px 0;
        }
        .event-details p, .event-association p, .event-location p {
            font-size: 16px;
        }
        .event-details-icon, .event-association-icon, .event-location-icon {
            margin-right: 10px;
        }
        .event-map {
            width: 100%;
            height: 300px;
        }
        .reserve-button {
            background-color: #E67E22;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin: 20px 0;
            transition: background-color 0.3s ease-in-out;
        }
        .reserve-button:hover {
            background-color: #d35400;
        }
        #infos{
            display: flex;
        }
   
        .infos1{
            display: flex;
        }
        .event-association{
            display:flex;
            margin-top: 20px;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>

    <div style="margin-left: 100px; margin-right: 100px">
        <img src="{{ asset('storage/images/lebou.png') }}" alt="Event Image" class="event-image">
        <h1 class="event-header mr-700">Cérémonie d'Hommage aux Lébous</h1>
        <div class="d-flex justify-content-between event-details" id="infos">
            <div class="infos1">
                <img src="{{ asset('storage/images/calendar1.png')}}" class="event-details-icon" alt="Date Icon"> 
            <p>
                27 Juin 2024
            </p>
        </div>
        <div class="infos1">
            <img src="{{ asset('storage/images/location1.png')}}" class="event-details-icon" alt="Location Icon"> 
            <p>
                King Fahd Palace
            </p>
        </div>
        <div class="infos1">
            <img src="{{ asset('storage/images/ticket1.png')}}" class="event-details-icon" alt="Ticket Icon" > 
            <p>
                Le billet est obtenu sous réservation
            </p>
        </div>
        </div>
        <a href="#" class="reserve-button">Réservez maintenant</a>
        <div class="event-details">
            <h3>Détails</h3>
            <p>La cérémonie d'hommage aux Lébous est un événement culturel et traditionnel organisé pour honorer et célébrer le peuple Lébou, une communauté indigène sénégalaise réputée pour ses traditions maritimes et ses contributions à la culture locale.</p>
        </div>
        <h3>Association</h3>
        <div class="event-association">
            <img src="{{ asset('storage/images/logoAssociation.png') }}" class="event-association-icon" alt="Association Logo" height="100" width="100">
            <p>
                La cérémonie d'hommage aux Lébous est un événement culturel et traditionnel organisé pour honorer et célébrer le peuple Lébou, une communauté indigène sénégalaise réputée pour ses traditions maritimes et ses contributions à la culture locale.
            </p>
        </div>
        <div class="event-location">
            <h3 class="mb-">Localisation</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.425968472577!2d-17.52640702542454!3d14.74501507352577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec112de27643701%3A0x367e58f604bf2e3c!2sKing%20Fahd%20Palace%20H%C3%B4tel!5e0!3m2!1sen!2ssn!4v1720111364663!5m2!1sen!2ssn" width="1320" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
