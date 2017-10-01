<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function  actualite(){
        return view('accueil.actualite');
    }
  }
