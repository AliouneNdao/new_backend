<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login'); // Assure-toi d'avoir une vue pour le formulaire de connexion
    }

    public function login(Request $request)
    {
        // Logique d'authentification ici
    }
}

