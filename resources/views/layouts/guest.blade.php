<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            .login{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-color: #f8f9fa;
            }
            .form{
                width: 350px;
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                height: 100vh;
                width: 100vh;
            }
            .image-container{
                position: relative;
                overflow: hidden;
                height: 100vh;
                margin-bottom: 20px;

            }
            @media (max-width: 768px) {
                .image-container{
                    display: none;
                }
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="login">
            <div class="image-container">
                <img src="{{ asset('storage/images/connect.png') }}" alt="Register Background" class="w-full h-full object-cover" />
            </div>

            <div class="form">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
