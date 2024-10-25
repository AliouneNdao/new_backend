<?php
namespace App\Http\Controllers;

use App\Models\Commercant;
use Illuminate\Http\Request;



class CommercantController extends Controller
{
    // Acheter en gros
    public function acheterEnGros($id)
    
    {
        $commercant = Commercant::find($id);
        if ($commercant) {
            $commercant->acheter_en_gros = true;  // Met à jour acheter_en_gros
            $commercant->save();

            return response()->json($commercant);
        }
        
        return response()->json(['message' => 'Commerçant non trouvé'], 404);
    }
    public function consulterEvaluations()
{
    $commercant = Auth::user();
    $evaluations = Evaluation::whereHas('produit', function($query) use ($commercant) {
        $query->where('commercant_id', $commercant->id);
    })->get();
    
    return view('commercant.evaluations', compact('evaluations'));
}


    // Gérer stock
    public function gererStock(Request $request, $id)
    {
        $commercant = Commercant::find($id);
        if ($commercant) {
            $commercant->stock = $request->stock;  // Mise à jour du stock
            $commercant->save();

            return response()->json($commercant);
        }
        
        return response()->json(['message' => 'Commerçant non trouvé'], 404);
    }
}
