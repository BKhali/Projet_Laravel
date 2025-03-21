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
            align-items: flex-start;
        }
        .ferry-details img {
            max-width: 100%; /* Image prend toute la largeur de sa colonne */
            height: auto; /* Maintient les proportions */
            margin-bottom: 25px;
        }
        .ferry-details .row {
            width: 100%; /* Assure que les colonnes d'infos occupent tout l'espace disponible */
        }
        .ferry-details p {
            margin-bottom: 15px;
        }
        .btn-danger {
            background-color: #ff4d4d;
            border-color: #ff4d4d;
            width: 250px; /* Augmente la largeur du bouton */
            margin: 0 auto; /* Centre le bouton */
        }
        .btn-danger:hover {
            background-color: #ff1a1a;
            border-color: #ff1a1a;
        }
        .btn-pdf {
            display: inline-flex;
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
        body {
            font-size: 1.2rem; /* Augmente la taille globale du texte */
        }

        h1 {
            font-size: 2.5rem; /* Agrandit le titre principal */
            margin-bottom: 20px;
        }

        .ferry-details p {
            font-size: 1.3rem; /* Augmente la taille des paragraphes */
        }

        .btn {
            font-size: 1.2rem; /* Augmente la taille du texte des boutons */
            padding: 10px 20px; /* Augmente la taille des boutons */
        }

        .btn-pdf i, .btn-secondary i {
            font-size: 1.5rem; /* Agrandit les icônes dans les boutons */
        }

        .navbar-brand, .navbar-text {
            font-size: 1.5rem; /* Augmente la taille du texte dans la barre de navigation */
        }

        .btn-secondary, .btn-danger, .btn-primary {
            font-size: 1.2rem; /* Assure une taille de texte cohérente */
            padding: 10px 20px; /* Assure une taille de bouton cohérente */
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
        <div class="ferry-details row">
            <!-- Colonne gauche : Image -->
            <div class="col-md-5 d-flex align-items-center">
                <img src="{{ asset('img/' . $ferry->photo) }}" alt="Photo du ferry" class="img-fluid">
            </div>
            
            <!-- Colonne droite : Informations -->
            <div class="col-md-7">
                <div class="row">
                    <!-- Première colonne : Nom et dates -->
                    <div class="col-md-6">
                        <br>
                        <p><strong>Nom :</strong> {{ $ferry->nom }}</p>
                        <p><strong>Date création :</strong> {{ $ferry->created_at }}</p>
                        <p><strong>Date mise à jour :</strong> {{ $ferry->updated_at }}</p>
                    </div>
                    <!-- Deuxième colonne : Dimensions et vitesse -->
                    <div class="col-md-6">
                        <br>
                        <p><strong>Longueur :</strong> {{ $ferry->longueur }}</p>
                        <p><strong>Largeur :</strong> {{ $ferry->largeur }}</p>
                        <p><strong>Vitesse :</strong> {{ $ferry->vitesse }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Bouton retour -->
            <a href="{{ route('ferries.index') }}" class="btn btn-secondary mr-2">
                Retour à la liste
            </a>


            <!-- Bouton supprimer -->
            <form action="{{ route('ferries.destroy', $ferry->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger " onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce ferry ?')">
                    <i class="fas fa-trash-alt"></i> Supprimer
                </button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>