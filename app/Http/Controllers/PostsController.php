<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use\App\Category
//use\App\Post

class PostsController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function inscription(){
        return view('page.inscription');
    }

    public function partenaire(){
        return view('accueil.partenaire');
    }

    public function actualite(){
        return view('accueil.actualite');
    }

    public function create(){
    	return view('page.creation');
    }

    public function modifier(){
        return view('page.modification');
    }
    

}
