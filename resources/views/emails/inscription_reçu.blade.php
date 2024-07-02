<!DOCTYPE html>
<html>
<head>
    <title>Gestion d'évènement et de réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header h1 {
            margin: 0;
            color: #007bff;
        }
        .content p {
            margin: 10px 0;
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
