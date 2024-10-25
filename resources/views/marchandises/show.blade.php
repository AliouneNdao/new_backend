<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails des sneakers</title>
    <link rel="stylesheet" href="{{ asset('css/kev.css') }}">
</head>
<body>
<x-app-layout>
    <div class="container">
        <h1>Détails des sneakers</h1>
        <div class="marchandise-details">
            <p><strong>ID:</strong> {{ $marchandise->id }}</p>
            <p><strong>Nom_marchandise:</strong> {{ $marchandise->nom }}</p>
            <p><strong>Prix:</strong> {{ $marchandise->prix }}</p>
            <p><strong>Libelle:</strong> {{$marchandise->libelle }}</p>
            <p><strong>Quantite:</strong> {{ $marchandise->quantite }}</p>
            <a href="{{ route('marchandises.index') }}" class="btn btn-retour">Retour à la liste</a>
        </div>
    </div>
</x-app-layout>
</body>
</html>
