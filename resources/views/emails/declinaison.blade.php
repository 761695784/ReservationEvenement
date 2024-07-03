<!DOCTYPE html>
<html>
<head>
    <title>Confirmation de Déclinaison</title>
    <style>
        
        .header h1 {
            margin: 0;
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Confirmation de Déclinaison</h1>
        </div>
        <div class="content">
            <h3>Bonjour {{ $userName }},</h3>
            <p>Nous vous informons que votre inscription à l'événement <strong>{{ $evenementNom }}</strong> a été déclinée.</p>
            <p><strong>Détails de l'événement :</strong></p>
            <ul>
                <li><strong>Date :</strong> {{ $evenementDate }}</li>
                <li><strong>Lieu :</strong> {{ $evenementLieu }}</li>
            </ul>
            <br>
            <p>Cordialement,</p>
        </div>
    </div>
</body>
</html>
