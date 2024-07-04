<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="titre">Connexion</h1>
        <div class="button-class">
            <div class="icone-Google">
                <a href="#"><i class="fab fa-google"></i></a>
            </div>
            <div class="tit">Connexion avec Google </div>
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full input-height" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full input-height" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="item">
            <x-primary-button class="ms-3">
                {{ __('Connexion') }}
            </x-primary-button><br>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">S'INSCRIRE</a>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
    </form>
    <style>
        body {
            background-image: url({{ asset('storage/images/connect.png') }});
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

        .titre {
            font-size: 50px;
            color: #E67E22;
            text-align: center;
            font-weight: bold;
        }

        .form {
            padding: 4vh;
        }

        .input-height {
            height: 55px;
        }

        .item {
            display: flex !important;
            justify-content: space-between;
            align-items: center;
            flex-direction: column !important;
        }

        .ms-3 {
            width: 100%;
            text-align: center !important;
            justify-content: center !important;
            background-color: #E67E22;
            font-size: 20px !important;
            height: 50px !important;
        }
    </style>

</x-guest-layout>
