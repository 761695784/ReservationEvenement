<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'événement</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }

    .sidebar-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        height: 100vh;
        padding-top: 20px;
        background: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .sidebar-heading {
        padding: 10px 15px;
        font-size: 1.2rem;
    }

    .sidebar .nav-link {
        font-size: 1rem;
        margin-bottom: 30px;/* Ajoute de l'espacement entre les liens */
        margin: 1.2rem;
        margin-right: 30px;
        color:#000; ;
        font-weight: bold;
    }

    .sidebar .nav-link.active {
        color: #FF6600;
        font-weight: bold;
        color: rgb(255, 255, 255);
        font-weight: bold;
        background-color: #FF6600;
        border-radius: 25px 0 0 25px; /* Ajoute des coins arrondis */
        padding: 10px;
        width: 93%;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .btn-warning {
        width: 100%;
        background-color: #FF6600;
    }

    .logout-button {
        margin-top: auto; /* Pousse le bouton de déconnexion vers le bas */
        padding: 20px 0;
    }

</style>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div>
                        <h4 class="sidebar-heading">Nom Association</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    Evénements
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Historiques
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="logout-button">
                        <button class="btn btn-warning">Déconnexion</button>
                    </div>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
            @endif
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">SIMPLON Senegal Numérique</h1>
                </div>
                <form method="POST" action="{{ route('ajouter') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="nom-evenement">Nom Evènement *</label>
                        <input type="text" class="form-control" id="nom-evenement" placeholder="Entrer le nom de l'evenement" name="nom">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date-evenement">Date Evènement *</label>
                            <input type="date" class="form-control" id="date-evenement" name="date_evenement">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lieu">Lieu *</label>
                            <input type="text" class="form-control" id="lieu" placeholder="Entrer le nom de l'evenement" name="lieu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="nombre-place">Nombre place *</label>
                        <input type="number" class="form-control" id="nombre-place" value="1" min="1" name="nombre_place">
                    </div>
                    <div class="form-group">
                        <label for="description-evenement">Description Evènement</label>
                        <textarea class="form-control" id="description-evenement" rows="3" placeholder="Donner une petite description de l'evenement" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dernier-delai">Dernier délai Inscription *</label>
                        <input type="date" class="form-control" id="dernier-delai" name="dernier_delai">
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </form>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
