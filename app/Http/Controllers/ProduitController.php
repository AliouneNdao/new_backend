<?php
namespace App\Http\Controllers;
use App\Models\Produit;

class ProduitController extends Controller
{
    // Consulter les détails d'un produit
    public function consulterDetails($id)
    {
        $produit = Produit::find($id);

        if ($produit) {
            return response()->json($produit, 200);
        } else {
            return response()->json(['message' => 'Produit non trouvé'], 404);
        }
    }
}

