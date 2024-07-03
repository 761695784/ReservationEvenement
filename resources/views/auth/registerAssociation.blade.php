<x-guest-layout>
    <form method="POST" action="{{ route('register.association') }}" enctype="multipart/form-data">
        @csrf

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
      <!-- Description -->
      <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea id="description" class="block mt-1 w-full" name="description" required>{{ old('description') }}</textarea>
        <x-input-error :messages="$errors->get('description')" class="mt-2" />
    </div>

        <!-- Adresse -->
        <div class="mt-4">
            <x-input-label for="adresse" :value="__('Adresse')" />
            <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autocomplete="adresse" />
            <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
        </div>

        <!-- Secteur d'activité -->
        <div class="mt-4">
            <x-input-label for="secteur_activite" :value="__('Secteur d\'activité')" />
            <x-text-input id="secteur_activite" class="block mt-1 w-full" type="text" name="secteur_activite" :value="old('secteur_activite')" required autocomplete="secteur_activite" />
            <x-input-error :messages="$errors->get('secteur_activite')" class="mt-2" />
        </div>

        <!-- NINEA -->
        <div class="mt-4">
            <x-input-label for="ninea" :value="__('NINEA')" />
            <x-text-input id="ninea" class="block mt-1 w-full" type="text" name="ninea" :value="old('ninea')" required autocomplete="ninea" />
            <x-input-error :messages="$errors->get('ninea')" class="mt-2" />
        </div>

        <!-- Logo -->
        <div class="mt-4">
            <x-input-label for="logo" :value="__('Logo')" />
            <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" />
            <x-input-error :messages="$errors->get('logo')" class="mt-2" />
        </div>

        <!-- User ID -->
        {{-- <div class="mt-4">
            <x-input-label for="user_id" :value="__('User ID')" />
            <x-text-input id="user_id" class="block mt-1 w-full" type="text" name="user_id" :value="old('user_id')" required autocomplete="user_id" />
            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
        </div> --}}

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Register Association') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
