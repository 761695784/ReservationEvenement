<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de réservation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>


<style>
    body {
        background-color: #f8f9fa;
    }

    .text-orange {
        color: #f77d00;
    }

    .btn-orange {
        background-color: #f77d00;
        border: none;
    }

    .btn-orange:hover {
        background-color: #d66b00;
    }

    .img-fluid {
        border-radius: 8px;
    }

    .container {
        max-width: 900px;
    }

    h2 {
        margin-bottom: 20px;
    }
</style>
<body>
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="{{ asset('storage/' . $evenement->image) }}" class="img-fluid" alt="Table setting">
            </div>
            <div class="col-md-6">
                <h2 class="text-center text-orange">Reservation</h2>
                <form>
                    <!-- Champ caché pour l'ID de l'événement -->
                    <input type="hidden" name="evenement_id" value="evenement_id">

                    <!-- Champ caché pour l'ID de l'utilisateur (par exemple, si vous utilisez une session PHP ou autre) -->
                    <input type="hidden" name="user_id" value="user_id">

                    <!-- Champ de nom complet en lecture seule -->
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" class="form-control" id="name" value="Nom de l'utilisateur" readonly>
                    </div>

                    <!-- Champ d'e-mail en lecture seule -->
                    <div class="form-group">
                        <label for="email">E-mail Address</label>
                        <input type="email" class="form-control" id="email" value="email@utilisateur.com" readonly>
                    </div>

                    <!-- Champ de numéro de téléphone modifiable -->
                    <div class="form-group">
                        <label for="phone">Numero Telephone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrez votre numero">
                    </div>

                    <!-- Bouton de validation -->
                    <button type="submit" class="btn btn-orange btn-block">Valider</button>

                    <!-- Nombre de places disponibles -->
                    <p class="text-center mt-3">Nombre de place disponible : <span class="text-danger">14</span></p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
