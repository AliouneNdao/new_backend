<?php
namespace App\Http\Controllers;
use App\Models\Evaluation;

class EvaluationController extends Controller
{
    // Consulter toutes les évaluations
    public function index()
    {
        $evaluations = Evaluation::with('consommateur')->get();
        return response()->json($evaluations, 200);
    }

    // Consulter une évaluation spécifique
    public function consulterEvaluation($id)
    {
        $evaluation = Evaluation::with('consommateur')->find($id);

        if ($evaluation) {
            return response()->json($evaluation, 200);
        } else {
            return response()->json(['message' => 'Évaluation non trouvée'], 404);
        }
    }
}


