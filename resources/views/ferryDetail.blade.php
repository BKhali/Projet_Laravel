<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Détails du Ferry</title>
    <style>
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .navbar-text {
            color: #fff;
        }
        .container {
            margin-top: 20px;
        }
        .ferry-details {
            display: flex;
            align-items: center;
        }
        .ferry-details img {
            margin-right: 20px;
        }
        .ferry-details .info {
            flex-grow: 1;
        }
        .btn-danger {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
        }
        .btn-danger:hover {
            background-color: #ff1a1a;
            border-color: #ff1a1a;
        }
        .btn-pdf {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #007bff;
        }
        .btn-pdf:hover {
            text-decoration: underline;
        }
        .btn-pdf i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">SicilyLines</a>
            <div class="ml-auto">
                <span class="navbar-text">
                    {{ Auth::user()->name ?? 'Invité' }}
                </span>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Information du Bateau</h1>
        <div class="ferry-details">
            <img src="{{ asset('img/' . $ferry->photo) }}" alt="{{ $ferry->nom }}" width="200">
            <div class="info">
                <p>Nom : {{ $ferry->nom }}</p>
                <p>Longueur : {{ $ferry->longueur }}</p>
                <p>Largeur : {{ $ferry->largeur }}</p>
                <p>Vitesse : {{ $ferry->vitesse }}</p>
                <a href="#" class="btn-pdf">
                    <i class="fas fa-download"></i> Générer un pdf
                </a>
            </div>
        </div>
        <form action="{{ route('ferries.destroy', $ferry->id) }}" method="POST" class="mt-3">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce ferry ?')">Supprimer</button>
        </form>
        <a href="{{ route('ferries.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>