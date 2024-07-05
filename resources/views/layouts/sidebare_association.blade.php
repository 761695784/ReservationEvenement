<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('css/sidebare_association.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper d-flex">
        <div class="sidebar d-flex flex-column justify-content-between">
            <div>
                <div class="logo-container text-center mb-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid" style="max-height: 100px;">
                </div>
                
                <ul class="menu-list">
                    <li>
                        <a href="{{route('association.dashboard')}}" class="{{ request()->is('{{--association.dashboard--}}dashboard_association') ? 'active' : '' }}">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="/liste" class="{{ request()->is('liste') ? 'active' : '' }}">
                            <i class="fas fa-calendar-alt"></i> Evénements
                        </a>
                    </li>
                    <li>
                        <a href="#" class="{{ request()->is('#') ? 'active' : '' }}">
                            <i class="fas fa-history"></i> Historiques
                        </a>
                    </li>
                    <li>
                        <a href="#" class="{{ request()->is('#') ? 'active' : '' }}">
                            <i class="fas fa-cogs"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="logout-list">
                <button class="logout-button">
                    <a href="/deconnexion">
                        <svg class="icon" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                            <path class="icon-path" fill="white"
                                d="M5 11h8v2H5v3l-5-4l5-4zm-1 7h2.708a8 8 0 1 0 0-12H4a9.99 9.99 0 0 1 8-4c5.523 0 10 4.477 10 10s-4.477 10-10 10a9.99 9.99 0 0 1-8-4" />
                        </svg>
                        Deconnexion
                    </a>
                </button>
            </ul>
        </div>
    </div>
    <div class="container top-bar d-flex align-items-center justify-content-end" style="margin-top: 0">
            @if(isset($association))
                <h1>{{ $association->name }}</h1>
             @endif
             <hr>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
        
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    

</body>
</html>
