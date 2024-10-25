<?php
namespace App\Http\Controllers;
use App\Models\Commande;

class CommandeController extends Controller
{
    // Consulter les détails de la commande
    public function consulterDetails($id)
    {
        $commande = Commande::find($id);

        if ($commande) {
            return response()->json($commande, 200);
        } else {
            return response()->json(['message' => 'Commande non trouvée'], 404);
        }
    }

    // Suivre l'état de la commande
    public function suivreCommande($id)
    {
        $commande = Commande::find($id);

        if ($commande) {
            return response()->json([
                'id_commande' => $commande->id_commande,
                'etat' => $commande->etat
            ], 200);
        } else {
            return response()->json(['message' => 'Commande non trouvée'], 404);
        }
    }
}

