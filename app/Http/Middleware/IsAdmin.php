<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Vérification si l'utilisateur est connecté et a le rôle d'administrateur
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request); // Autoriser l'accès si l'utilisateur est admin
        }

        // Retourne une réponse JSON si accès refusé, ou une redirection
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Accès refusé, vous devez être administrateur.'], 403);
        }

        return redirect('/'); // Rediriger les non-admins vers la page d'accueil
    }
}
