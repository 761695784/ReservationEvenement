<x-app-layout>
    <a href="{{route('evenements.ajouter')}}" class="btn btn-danger">Ajouter des Evénements</a><hr>
    <a href="{{route('association.dashboard')}}" class="btn btn-primary">Mes evenements</a>

    
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @role('Administrateur')
                        Je suis un admin ! <br>
                        @can('GestionUtilisateurs')
                        Je peux voir le message Hello World
                        @endcan
                    @else
                    Je suis un utilisateur <br>
                    @can('Reservation')
                    Je peux voir le message Hello World
                    @endcan

                    @endrole

                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

    {{-- @include('evenements.ajouter') --}}
    {{-- @include('evenements.reserver') --}}
    {{-- @include('admin.listeAsso') --}}
</x-app-layout>
