<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marchandises</title>
    <link rel="stylesheet" href="{{ asset('../css/formule.css') }}">
</head>
<body>
    <main class="main">
        <div class="container">
            <div class="formulaire-rdv">
                <h1>la liste des montres</h1>
                <form id="rdv-form" action="/marchandises.store" method="POST">
                    <div class="form-group">
                        <label for="nom">Nom_montres :</label>
                        <input type="text" id="nom" name="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="prix">Prix :</label>
                        <input type="number" id="prix" name="prix" required>
                    </div>
                    <div class="form-group">
                        <label for="libelle">Libelle :</label>
                        <input type="text" id="libelle" name="libelle" required>
                    </div>
                    <div class="form-group">
                        <label for="quantite">Quantite :</label>
                        <input type="number" id="quantite" name="quantite" required>
                    </div>
                    <button type="submit" class="btn">Envoyer</button>
                </form>
            </div>
        </div>
    </main>
    <script src="formule.js"></script>
</body>
</html>
