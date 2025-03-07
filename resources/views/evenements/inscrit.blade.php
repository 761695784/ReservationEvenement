<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion d'évènement et de réservation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                border-radius: 25px 0 0 25px;
                padding: 10px;
                width: 93%;
            }

            .btn-warning {
                width: 100%;
                background-color: #FF6600;
            }

            .table th {
                background-color: #FF6600;
                color: white;
                font-weight: bold;
            }

            .sidebar {
                box-shadow: 0 10px 1px 0px rgba(0, 0, 0, 0.2);
            }

            .logout-button {
                margin-top: auto;
                padding: 20px 0;
            }

            @media (max-width: 768px) {
                .sidebar {
                    height: auto;
                    box-shadow: none;
                }

                .sidebar-sticky {
                    position: relative;
                    height: auto;
                    flex-direction: row;
                    justify-content: space-between;
                    align-items: center;
                }

                .sidebar .nav-link {
                    margin: 0.5rem;
                    font-size: 0.9rem;
                }

                .logout-button {
                    margin: 0;
                    padding: 0;
                    display: flex;
                    justify-content: flex-end;
                }

                .sidebar .btn-warning {
                    margin-bottom: 20px;
                }
            }

           @media print {
                .no-print {
                    display: none;
                }

                th.no-print,
                td.no-print {
                    display: none;
                }

                .table {
                    border: 1px solid black;
                    width: 100%;
                    border-collapse: collapse;
                }

                .table th,
                .table td {
                    border: 1px solid black;
                    padding: 8px;
                    text-align: left;
                }
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <button class="btn btn-primary d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar"
                    aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="col-md-2 d-md-block bg-light sidebar collapse" id="sidebar">
                    <div class="sidebar-sticky">
                        <div>
                            <h4 class="sidebar-heading">
                                {{ $associationName }}
                            </h4>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-tachometer-alt"></i> Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">
                                        <i class="fas fa-calendar-alt"></i> Evenement
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
                <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">{{ $evenement->nom }}</h1>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <button class="btn btn-primary mt-3" onclick="printDiv('printSection')">
                                    <i class="fas fa-print"></i> Imprimer
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="printSection">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom Complet</th>
                                        <th>Email</th>
                                        <th>Téléphone</th>
                                        <th>Signature</th>
                                        <th class="no-print">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->user->name }}</td>
                                        <td>{{ $reservation->user->email }}</td>
                                        <td>{{ $reservation->user->telephone }}</td>
                                        <td></td>
                                        <td class="no-print">
                                            <form action="{{ route('reservations.decliner', $reservation->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Décliner</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script>
            function printDiv(divId) {
                var printContents = document.getElementById(divId).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
    </x-app-layout>
