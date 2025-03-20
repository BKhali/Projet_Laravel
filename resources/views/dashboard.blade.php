<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <?php /*<div class="container">
        <h1>Liste des Ferries</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Photo</th>
                    <th>Longueur</th>
                    <th>Largeur</th>
                    <th>Vitesse</th>
                    <th>Date de création</th>
                    <th>Date de mise à jour</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ferries as $ferry)
                <tr>
                    <td>{{ $ferry->id }}</td>
                    <td>{{ $ferry->nom }}</td>
                    <td><img src="{{ $ferry->photo }}" alt="{{ $ferry->nom }}" width="100"></td>
                    <td>{{ $ferry->longueur }}</td>
                    <td>{{ $ferry->largeur }}</td>
                    <td>{{ $ferry->vitesse }}</td>
                    <td>{{ $ferry->created_at }}</td>
                    <td>{{ $ferry->updated_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>*/?>
</x-app-layout>
