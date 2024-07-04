<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Création d'événement</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
        margin-bottom: 30px; /* Ajoute de l'espacement entre les liens */
        margin: 1.2rem;
        margin-right: 30px;
        color: #000;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .sidebar .nav-link i {
        margin-right: 10px;
    }

    .sidebar .nav-link.active {
        color: rgb(255, 255, 255);
        font-weight: bold;
        background-color: #FF6600;
        border-radius: 25px 0 0 25px; /* Ajoute des coins arrondis */
        padding: 10px;
        width: 93%;
    }

    .form-group {
        margin-bottom: 1.5rem;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .form-group label {
        flex: 1;
        margin-bottom: 0;
    }

    .form-group input, .form-group textarea {
        flex: 2;
    }

    .form-group input[type="file"] {
        flex: 2;
    }

    .btn-warning {
        width: 100%;
        background-color: #FF6600;
    }
    .sidebar {
    box-shadow: 0 10px 1px 0px rgba(0, 0, 0, 0.2);
}


    .logout-button {
        margin-top: auto; /* Pousse le bouton de déconnexion vers le bas */
        padding: 20px 0;
    }

    .required-field::after {
        content: " *";
        color: red;
    }
</style>
<body>

     @if (session('etat'))
                <div class="alert alert-success">
                    {{session('etat')}}
                </div>
            @endif
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <div>
                        <h4 class="sidebar-heading">Nom Association</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-tachometer-alt"></i> Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fas fa-calendar-alt"></i> Evénements
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-history"></i> Historiques
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <i class="fas fa-cogs"></i> Settings
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
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <img src="{{ asset('images/simplonlogo.png') }}" alt="Logo Association" class="img-fluid" style="max-height: 100px;">
                </div>
                @if(session('etat'))
                <div class="alert alert-warning">
                    {{ session('etat') }}
                </div>
            @endif
                <form method="POST" action="{{route('evenements.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nom-evenement" class="col-sm-2 col-form-label required-field">Nom Evènement</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nom-evenement" placeholder="Entrer le nom de l'evenement" name="nom">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date-evenement" class="col-sm-2 col-form-label required-field">Date Evènement</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" id="date-evenement" name="date_evenement">
                        </div>
                        <label for="lieu" class="col-sm-1 col-form-label required-field">Lieu</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="lieu" placeholder="Entrer le nom de l'evenement" name="lieu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label required-field">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombre-place" class="col-sm-2 col-form-label required-field">Nombre place</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="nombre-place" value="1" min="1" name="nombre_place">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description-evenement" class="col-sm-2 col-form-label required-field">Description Evènement</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description-evenement" rows="3" placeholder="Donner une petite description de l'evenement" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dernier-delai" class="col-sm-2 col-form-label required-field">Dernier délai Inscription</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="dernier-delai" name="dernier_delai">
                        </div>
                    </div>
                    <input type="hidden" name="association_id" value="{{ auth()->user()->association->id }}">
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
</x-app-layout>
