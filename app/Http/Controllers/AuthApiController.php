<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthApiController extends Controller
{
    // Méthode pour gérer la connexion
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            // Authentification réussie

            // Générer un jeton d'accès
            $token = $this->generateAccessToken(Auth::user());

            // Retourner le jeton dans la réponse
            return response()->json(['access_token' => $token], 200);
        } else {
            // Échec de l'authentification
            return response()->json(['error' => 'Identifiants invalides'], 401);
        }
    }

    private function generateAccessToken($user)
    {
        $token = $user->createToken('LaravelAPI')->accessToken;

        return $token;
    }

    // Méthode pour gérer la déconnexion
    public function logout(Request $request)
    {
        // Révoquer le token JWT de l'utilisateur authentifié
        $request->user()->token()->revoke();

        // Retourner une réponse
        return response()->json(['message' => 'Successfully logged out']);
    }

    // Méthode pour rafraîchir le token JWT
    public function refresh(Request $request)
    {
        // Générer un nouveau token JWT
        $newToken = $request->user()->createToken('LaravelAPI')->accessToken;

        // Retourner le nouveau token dans la réponse
        return response()->json(['token' => $newToken]);
    }

    // Méthode pour obtenir les informations de l'utilisateur authentifié
    public function me(Request $request)
    {
        // Retourner les informations de l'utilisateur authentifié
        return response()->json($request->user());
    }

}
