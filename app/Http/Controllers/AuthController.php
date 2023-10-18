<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Devis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Afficher la vue Login
    public function login_get()
    {
        return view('auth.login');
    }

    //Se connecter
    public function login_post(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    //Afficher la vue Dashboard
    public function dashboard()
    {
        if(Auth::check()){
            $devis = Devis::orderByDesc('created_at')->paginate(4);
            $totalDevis = Devis::count();

            $contacts = Contact::orderByDesc('created_at')->paginate(4);
            $totalContacts = Contact::count();

            return view('auth.dashboard', compact('devis', 'totalDevis', 'contacts', 'totalContacts'));

        }else{
            return redirect()->route('login.get');
        }
    }

    public function devis()
    {
        if(Auth::check()){
            $devis = Devis::orderByDesc('created_at')->paginate(4);
            $totalDevis = Devis::count();

            $contacts = Contact::orderByDesc('created_at')->paginate(4);
            $totalContacts = Contact::count();

            return view('auth.devis', compact('devis', 'totalDevis', 'contacts', 'totalContacts'));

        }else{
            return redirect()->route('login.get');
        }
    }

    public function contact()
    {
        if(Auth::check()){
            $devis = Devis::orderByDesc('created_at')->paginate(4);
            $totalDevis = Devis::count();

            $contacts = Contact::orderByDesc('created_at')->paginate(4);
            $totalContacts = Contact::count();

            return view('auth.contact', compact('devis', 'totalDevis', 'contacts', 'totalContacts'));

        }else{
            return redirect()->route('login.get');
        }
    }

    //Se déconnecter
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect()->route('home');
    }

}
