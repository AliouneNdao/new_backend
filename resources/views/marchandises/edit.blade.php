<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier vos choix</title>
    <link rel="stylesheet" href="{{ asset('css/kev.css') }}">
</head>
<body>
<x-app-layout>
    
    <div class="container">
        <a href="{{ route('marchandises.index') }}" class="btn btn-retour">Retour à la liste des montres</a>
        <h1>Modifier vos Montres</h1>
        <form action="{{ route('marchandises.update', $marchandise->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="nom">Nom_montres:</label>
            <input type="text" id="nom" name="nom"  value="{{ $marchandise->nom }}" required>

            <label for="prix">Prix:</label>
            <input type="number" id="prix" name="prix" value="{{ $marchandise->prix }}" required>

            <label for="libelle">Libelle:</label>
            <input type="text" id="libelle" name="libelle" value="{{ $marchandise->libelle }}" required>

            
            <label for="quantite">Quantite:</label>
            <input type="text" id="quantite" name="quantite"value="{{ $marchandise->quantite }}" required>


            <button type="submit" class="btn btn-modifier">Modifier</button>
        </form>
       
    </div>
</x-app-layout>
</body>
</html>
