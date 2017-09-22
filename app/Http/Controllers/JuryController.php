<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuryController extends Controller
{
    public function reglement(){
    	return view('jury.reglement');
    }

    public function participer(){
    	return view('jury.participer');
    }

    public function inscription(){
    	return view('jury.inscription');
    }
}
