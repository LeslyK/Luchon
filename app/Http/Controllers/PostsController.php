<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create(){
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

    public function edit(){
        return view('page.edition');
    }

      public function upload(Request $request)

    {

        $this->validate($request, [

            'title' => 'required',
            'description'=>'required',
            'content'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $input['image']);


        $input['title'] = $request->title;
        $input['comment']=$request->comment;
        //dd($input);

        ImageGallery::create($input);


        return back()

            ->with('success','fichier sauvegarder');

    }
    
}
