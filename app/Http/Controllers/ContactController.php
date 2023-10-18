<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Enregistre le formulaire de contact dans la base de données
    public function contact_post(Request $request){
    
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'objet' => 'required',
            'message' => 'required',
        ]);

        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->objet = $request->objet;
        $contact->message = $request->message;
        $contact->save();

        return back()->with('status', 'Votre message a bien été enregistrer. Vous serez contacter par un de nous responsable.');
    
    }
}
