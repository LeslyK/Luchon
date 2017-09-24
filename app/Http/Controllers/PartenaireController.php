<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    public function partenaire(){
        return view('accueil.partenaire');
    }
}
