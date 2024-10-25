<?php
namespace App\Http\Controllers;

use App\Models\User; // Assurez-vous d'importer le modèle User
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Supprimer un utilisateur
    public function supprimerUtilisateur($id)
    {
        $utilisateur = User::find($id);
        
        if ($utilisateur) {
            $utilisateur->delete();  // Supprimer l'utilisateur
            return response()->json(['message' => 'Utilisateur supprimé avec succès']);
        } else {
            return response()->json(['message' => 'Utilisateur non trouvé'], 404);
        }
    }
}

