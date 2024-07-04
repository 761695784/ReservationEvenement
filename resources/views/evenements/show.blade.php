
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail de l'événement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .event-detail {
            margin-top: 50px;
        }
        .event-image {
            border-radius: 15px;
            max-height: 400px;
            width: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <div class="container event-detail">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <img src="{{ $evenement->image }}" class="event-image" alt="Image de l'événement">
                    <div class="card-body">
                        <h1 class="card-title">{{ $evenement->nom }}</h1>
                        <p class="card-text">{{ $evenement->description }}</p>
                        <p>Date: {{ $evenement->date_evenement }}</p>
                        <p>Lieu: {{ $evenement->lieu }}</p>
                        <a href="{{ route('evenement.event') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

