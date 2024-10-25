<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue sur notre site</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site!</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('about') }}">À propos</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <h2>À la découverte de nos produits</h2>
            <p>Nous offrons une large gamme de produits de qualité.</p>
            <a href="{{ route('products') }}" class="btn">Voir les produits</a>
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Votre entreprise. Tous droits réservés.</p>
    </footer>
</body>
</html>
