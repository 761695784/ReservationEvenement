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
                <img src="path-to-your-image.jpg" class="img-fluid" alt="Table setting">
            </div>
            <div class="col-md-6">
                <h2 class="text-center text-orange">Reservation</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" class="form-control" id="name" placeholder="Nom Complet">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail Address</label>
                        <input type="email" class="form-control" id="email" placeholder="E-mail Address">
                    </div>
                    <div class="form-group">
                        <label for="phone">Numero Telephone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Entrez votre numero">
                    </div>
                    <button type="submit" class="btn btn-orange btn-block">Valider</button>
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
