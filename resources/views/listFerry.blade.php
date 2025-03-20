<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
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
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>