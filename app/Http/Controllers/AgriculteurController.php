<?php
namespace App\Http\Controllers;

use App\Models\Agriculteur;
use Illuminate\Http\Request;

class AgriculteurController extends Controller
{
    // Ajouter un agriculteur
    public function ajouterAgriculteur(Request $request)
    {
        $agriculteur = new Agriculteur();
        $agriculteur->nom = $request->nom;  // Assigner le nom
        $agriculteur->save();

        return response()->json(['message' => 'Agriculteur ajouté avec succès']);
    }

    // Modifier un agriculteur
    public function modifierAgriculteur(Request $request, $id)
    {
        $agriculteur = Agriculteur::find($id);
        if ($agriculteur) {
            $agriculteur->nom = $request->nom;  // Modifier le nom
            $agriculteur->save();

            return response()->json(['message' => 'Agriculteur modifié avec succès']);
        } else {
            return response()->json(['message' => 'Agriculteur non trouvé'], 404);
        }
    }

    // Consulter les commandes
    public function consulterCommandes($id)
    {
        // Logique pour consulter les commandes liées à l'agriculteur
        $agriculteur = Agriculteur::find($id);
        if ($agriculteur) {
            // Récupérer les commandes liées à cet agriculteur
            $commandes = [];  // Tu rempliras cette variable avec les données des commandes
            return response()->json($commandes);
        } else {
            return response()->json(['message' => 'Agriculteur non trouvé'], 404);
        }
    }
}
