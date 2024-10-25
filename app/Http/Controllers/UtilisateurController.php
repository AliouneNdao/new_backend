<?php

// app/Http/Controllers/UtilisateurController.php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    // Méthode pour afficher la liste des utilisateurs (admin only)
    public function index()
    {
        // Vérifie si l'utilisateur est admin
        if (auth()->user()->role != 'admin') {
            return redirect('/'); // Redirection si l'utilisateur n'est pas un admin
        }

        // Récupère tous les utilisateurs
        $utilisateurs = Utilisateur::all();

        // Renvoie la vue avec la liste des utilisateurs
        return view('admin.utilisateurs.index', compact('utilisateurs'));
    }

    // Méthode pour inscrire un nouvel utilisateur
    public function inscrire(Request $request)
    {
        // Validation des données
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:utilisateurs,email',
            'mot_de_passe' => 'required|string|min:8|confirmed',
        ]);

        // Création de l'utilisateur
        $utilisateur = Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mot_de_passe' => Hash::make($request->mot_de_passe),
        ]);

        // Retour de la réponse
        return response()->json(['message' => 'Utilisateur inscrit avec succès!', 'utilisateur' => $utilisateur], 201);
    }
}
