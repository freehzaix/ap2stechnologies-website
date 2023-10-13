<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //home
    public function home(){
        return view('pages.home');
    }

    //about
    public function about(){
        return view('pages.about');
    }

    //service
    public function service(){
        return view('pages.service');
    }

    //contact
    public function contact(){
        return view('pages.contact');
    }

}
