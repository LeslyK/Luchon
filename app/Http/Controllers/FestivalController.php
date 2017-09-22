<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function action(){        

        return view('festival.action');
    }

    public function evenement(){       

        return view('festival.evenements');
    }

    public function festivalscolaire(){
    	
    	 return view('festival.festival_scolaire');
    }

    public function festivalofficiel(){
    	
    	 return view('festival.festival_officiel');
    }
}
