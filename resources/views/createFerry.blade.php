<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Ajouter un Ferry</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container ">
            <a class="navbar-brand text-light" href="#">SicilyLines</a>
            <div class="ml-auto">
                <span class="navbar-text text-light">
                    {{ Auth::user()->name ?? 'Invité' }}
                </span>
            </div>
        </div>
    </nav><br>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <h1>Ajouter un Ferry</h1>
        <form action="{{ route('ferries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="longueur">Longueur</label>
                <input type="number" name="longueur" id="longueur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="largeur">Largeur</label>
                <input type="number" name="largeur" id="largeur" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="vitesse">Vitesse</label>
                <input type="number" name="vitesse" id="vitesse" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
            <a href="{{ route('ferries.index') }}" class="btn btn-secondary">Retour</a>
        </form>
    </div>
</body>
</html>