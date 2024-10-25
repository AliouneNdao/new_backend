<?php
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ConsommateurController;
use App\Http\Controllers\CommercantController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\AgriculteurController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Auth\LoginController;
Route::middleware(['auth', 'admin'])->group(function () {
    // Routes accessibles uniquement par les administrateurs
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
    // D'autres routes d'administration
});


// Routes accessibles uniquement par l'administrateur
Route::group(['middleware' => ['role:administrateur']], function() {
    Route::get('/utilisateurs', [UtilisateurController::class, 'index']); // Gérer les utilisateurs
    Route::get('/produits', [ProduitController::class, 'index']); // Gérer les produits
    Route::get('/commandes', [CommandeController::class, 'index']); // Gérer les commandes
    Route::get('/stocks', [StockController::class, 'index']); // Gérer les stocks
    // Ajoute d'autres routes ici si nécessaire...
});


// Ajoute la route pour la connexion
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::get('/test-controller', [TestController::class, 'index']);

Route::get('/test', function () {
    return response()->json(['message' => 'La vue fonctionne !']);
});

Route::middleware('api')->group(function () {

    // Route de test
    Route::get('/youngboy', function () {
        // Rendre la vue youngboy.blade.php sous forme de chaîne HTML
        $html = view('youngboy')->render();
        // Retourner la vue dans une réponse JSON
        return response()->json(['message' => 'bienvenue']);
    });
    
    Route::post('/inscrire', [UtilisateurController::class, 'inscrire']);
    Route::post('/connecter', [UtilisateurController::class, 'connecter']);
    Route::put('/modifier-profil/{id}', [UtilisateurController::class, 'modifierProfil']);
    Route::get('/consulter-profil/{id}', [UtilisateurController::class, 'consulterProfil']);


    // Routes pour les consommateurs
    Route::middleware('auth:api')->group(function () {
        Route::post('consommateur/ajouter_panier', [ConsommateurController::class, 'ajouter_panier']);
        Route::post('consommateur/passer_commande', [ConsommateurController::class, 'passer_commande']);
        Route::post('consommateur/laisser_evaluation', [ConsommateurController::class, 'laisser_evaluation']);
    });

    // Routes pour les commerçants
    Route::middleware('auth:api')->group(function () {
        Route::post('/commercant/acheter-gros', [CommercantController::class, 'acheterGros']);

        Route::post('commercant/gerer_stock', [CommercantController::class, 'gerer_stock']);
    });

    // Routes pour les produits
    Route::get('produits/{id}', [ProduitController::class, 'consulterDetails']);

    // Routes pour les commandes
    Route::get('commandes/{id}', [CommandeController::class, 'consulterDetails']);
    Route::get('commandes/{id}/suivre', [CommandeController::class, 'suivreCommande'])->middleware('auth:api');

    // Routes pour les évaluations
    Route::get('evaluations/consommateur/{id}', [EvaluationController::class, 'consulter_evaluation']);

    // Routes pour les agriculteurs
    Route::middleware('auth:api')->group(function () {
        Route::post('agriculteurs', [AgriculteurController::class, 'ajouter']);
        Route::put('agriculteurs/{id}', [AgriculteurController::class, 'modifier']);
        Route::get('agriculteurs/{id}/commandes', [AgriculteurController::class, 'consulter_commande']);
    });
});
