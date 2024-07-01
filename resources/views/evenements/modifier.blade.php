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
}

.sidebar-heading {
    padding: 10px 15px;
    font-size: 1.2rem;
}

.sidebar .nav-link {
    font-size: 1rem;
}

.sidebar .nav-link.active {
    color: #FF6600;
    font-weight: bold;
}

.form-group {
    margin-bottom: 1.5rem;
}

.btn-warning {
    width: 100%;
}

</style>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
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
                    <button class="btn btn-warning mt-4">Déconnexion</button>
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
                <form method="POST" action="{{route ('modifier_traitement',$evenement->id)}}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$evenement->id}}">
                    <div class="form-group">
                        <label for="nom-evenement">Nom Evènement *</label>
                        <input type="text" class="form-control" id="nom-evenement" placeholder="Entrer le nom de l'evenement" name="nom" value="{{$evenement->nom}}">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date-evenement">Date Evènement *</label>
                            <input type="date" class="form-control" id="date-evenement" name="date_evenement" value="{{$evenement->date_evenement}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lieu">Lieu *</label>
                            <input type="text" class="form-control" id="lieu" placeholder="Entrer le nom de l'evenement" name="lieu" value="{{$evenement->lieu}}" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image" value="{{ asset('storage/' . $evenement->image) }}">
                    </div>
                    <div class="form-group">
                        <label for="nombre-place">Nombre place *</label>
                        <input type="number" class="form-control" id="nombre-place" value="1" min="1" name="nombre_place" value="{{$evenement->nombre_place}}" >
                    </div>
                    <div class="form-group">
                        <label for="description-evenement">Description Evènement</label>
                        <textarea class="form-control" id="description-evenement" rows="3" placeholder="Donner une petite description de l'evenement" name="description">{{$evenement->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="dernier-delai">Dernier délai Inscription *</label>
                        <input type="date" class="form-control" id="dernier-delai" name="dernier_delai" value="{{$evenement->dernier_delai}}">
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
