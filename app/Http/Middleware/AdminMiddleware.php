<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (auth()->user()->role != 'admin') { // Assure-toi que le champ 'role' est bien configuré
            return response()->json(['message' => 'Accès non autorisé'], 403);
        }
    
        return $next($request);
    }
    
}

