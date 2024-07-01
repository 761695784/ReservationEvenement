<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style> body {
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
        margin-bottom: 30px;
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
        border-radius: 25px 0 0 25px; / Ajoute des coins arrondis /
        padding: 10px;
        width: 93%;
    }
    .btn-warning {
        width: 100%;
        background-color: #FF6600;
    }
    .sidebar {
    box-shadow: 0 10px 1px 0px rgba(0, 0, 0, 0.2);
}


    .logout-button {
        margin-top: auto; 
        padding: 20px 0;
    }
    </style>

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

</body>
</html>
