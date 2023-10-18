<?php

namespace App\Http\Controllers;

use App\Http\Requests\DevisPostRequest;
use App\Models\Devis;

class DevisController extends Controller
{
    //Traiter le formulaire de demande de devis en Post
    public function devis_post(DevisPostRequest $request){
        $validated = $request->validated();

        if($validated){
            $devis = new Devis();
            $devis->service = $request->service;
            $devis->nom = $request->nom;
            $devis->prenom = $request->prenom;
            $devis->email = $request->email;
            $devis->telephone = $request->telephone;
            $devis->save();
            return back()->with('status', 'Votre demande a bien été enregistré. Merci de patienter un responsable va vous appeler.');
        }
    }
}
