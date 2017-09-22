<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NousController extends Controller
{
     public function devenir(){
    	return view('nous.devenir');
    } 

    public function projet(){
    	return view('nous.projet');
    } 

    public function soutenir(){
    	return view('nous.soutenir');
    }

     public function stage(){
    	return view('nous.stage');
    }

     public function territoire(){
    	return view('nous.territoire');
    }
}
