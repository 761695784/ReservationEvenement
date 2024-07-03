<!DOCTYPE html>
<html>
<head>
    <title>Gestion d'évènement et de réservation</title>
    <style>
        .header h1 {
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Accusé de réception</h1>
        </div>
        <div class="content">
            <h3>Bonjour {{ $userName }},</h3>
            <p>Merci de vous être inscrit à l'événement "{{ $evenementNom }}".</p>
            <p>La date de l'événement est : {{ $evenementDate }}.</p>
            <p>Le lieu de l'événement est : {{ $evenementLieu }}.</p> <!-- Ajoutez cette ligne -->
            <p>Nous avons hâte de vous voir là-bas !</p>
            <br>
            <p>Cordialement,</p>
        </div>
        
    </div>
</body>
</html>


