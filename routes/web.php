
<?php
use App\Http\Controllers\UtilisateurController;
Route::middleware(['auth', 'admin'])->get('/admin/utilisateurs', [UtilisateurController::class, 'index']);


Route::get('/inscription', function () {
    return view('inscription'); // Assurez-vous que le fichier inscription.blade.php existe
});

