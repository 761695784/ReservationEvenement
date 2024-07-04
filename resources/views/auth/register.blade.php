<x-guest-layout>
    <style >
        .titre{
            font-size: 50px;
            color: #E67E22;
            text-align: center;
            font-weight: bold;
        }
    </style>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class='titre'>Creer mon Compte</h1>

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="telephone" :value="__('telephone')" />
            <x-text-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div><br>

        <div class="item">

            <x-primary-button class="ms-4">
                {{ __('Créer mon Compte') }}
            </x-primary-button><br>
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">SE CONNECTER</a>

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

        </div>
    </form>
    <style>
        body {
            background-image: url({{ asset('storage/images/register.png') }});
            background-size: cover;
            background-position: center;
            height: 100vh;
        }

       .item{
        display: flex !important;
        justify-content: space-between;
        align-items: center;
        flex-direction: column !important;
       }

       .ms-4 {
            width: 100%;
            text-align: center !important;
            justify-content: center !important;
            background-color: #E67E22;
            font-size: 20px !important;
            height: 50px !important;



        }
    </style>
</x-guest-layout>
