<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Associations</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #f8f9fa;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding-top: 20px;
        }
        .sidebar a {
            text-decoration: none;
            color: black;
            font-size: 1.2rem;
            display: block;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
        .sidebar a:hover {
            background-color: #FF6600;
            color: white;
        }
        .sidebar .active {
            background-color: #FF6600;
            color: white;
        }
        .logout-button {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }
        .content {
            margin-left: 270px;
            padding: 20px;
        }
        .association-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .association-card img {
            max-width: 100px;
            height: auto;
        }
        .association-details {
            flex-grow: 1;
            margin-left: 20px;
        }
        .status {
            color: green;
            font-weight: bold;
        }
        .delete-icon {
            color: red;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }
            .sidebar a {
                display: inline-block;
                padding: 10px;
            }
            .content {
                margin-left: 0;
            }
            .association-card {
                flex-direction: column;
                align-items: flex-start;
            }
            .association-details {
                margin-left: 0;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<div class="sidebar">
    <div class="sidebar-sticky">
        <h4 class="sidebar-heading text-center">Administrateur</h4>
        <a href="#" class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="#"><i class="fas fa-calendar-alt"></i> Associations</a>
        <a href="#"><i class="fas fa-users"></i> Utilisateurs</a>
        <a href="#"><i class="fas fa-cogs"></i> Paramètres</a>
        <div class="logout-button">
            <button class="btn btn-warning">Déconnexion</button>
        </div>
    </div>
</div>

<div class="content">
    <h2 class="mb-4">Liste des Associations</h2>
    <div class="association-card">
        <img src="images/simplon_logo.png" alt="Logo SIMPLON">
        <div class="association-details">
            <h4>SIMPLON Senegal</h4>
            <p>Numérique</p>
            <span class="status">✔ Active</span>
        </div>
        <i class="fas fa-trash delete-icon"></i>
    </div>
    <div class="association-card">
        <img src="images/sonatel_logo.png" alt="Logo Sonatel">
        <div class="association-details">
            <h4>Sonatel</h4>
            <p>Numérique</p>
            <span class="status">✔ Active</span>
        </div>
        <i class="fas fa-trash delete-icon"></i>
    </div>
    <div class="association-card">
        <img src="images/orphelin_vert_logo.png" alt="Logo Orphelin Vert">
        <div class="association-details">
            <h4>Orphelin Vert</h4>
            <p>Action Sociale</p>
            <span class="status">✔ Active</span>
        </div>
        <i class="fas fa-trash delete-icon"></i>
    </div>
    <div class="association-card">
        <img src="images/aes_logo.png" alt="Logo AES">
        <div class="association-details">
            <h4>AES</h4>
            <p>Education</p>
            <span class="status">✔ Active</span>
        </div>
        <i class="fas fa-trash delete-icon"></i>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
