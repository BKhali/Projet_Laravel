<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-primary {
            background-color: #e7f1ff;
            color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #d0e7ff;
            color: #0056b3;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <a class="navbar-brand text-light" href="#">SicilyLines</a>
            <div class="ml-auto">
                <span class="navbar-text text-light">
                    {{ Auth::user()->name ?? 'Invité' }}
                </span>
            </div>
        </div>
    </nav><br>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-3">
            <h1>Liste des Ferries</h1>
            <div class="ml-auto d-flex">
                <!-- Bouton générer PDF -->
                <a href="#" class="btn btn-primary mr-2">Générer un PDF</a>
                <a href="{{ route('ferries.create') }}" class="btn btn-success">Ajouter un bateau</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Longueur</th>
                    <th>Largeur</th>
                    <th>Vitesse</th>
                    <th>Info</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ferries as $ferry)
                <tr>
                    <td>{{ $ferry->id }}</td>
                    <td>{{ $ferry->nom }}</td>
                    <td>{{ $ferry->longueur }}</td>
                    <td>{{ $ferry->largeur }}</td>
                    <td>{{ $ferry->vitesse }}</td>
                    <td>
                        <a href="{{ route('ferries.show', $ferry->id) }}" class="btn btn-primary">Voir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

