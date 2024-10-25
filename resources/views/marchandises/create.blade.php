<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un montre</title>
    <link rel="stylesheet" href="{{ asset('css/kev.css') }}">
</head>
<body>
    <x-app-layout>
    <div class="container">
        <a href="{{ route('marchandises.index') }}" class="btn btn-retour">Retour à la liste</a>
        <h1>Ajouter un Montres</h1>
        <form action="/marchandises" method="POST">
            @csrf
            <label for="nom">Nom_montres:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prix">Prix:</label>
            <input type="number" id="prix" name="prix" required>

            <label for="libelle">Libelle:</label>
            <input type="text" id="libelle" name="libelle" required>

            <label for="quantite">Quantite:</label>
            <input type="number" id="quantite" name="quantite" required>

            <button type="submit" class="btn btn-ajouter">Ajouter des montres</button>
        </form>
    </div>
    </x-app-layout>
</body>
</html>
