<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\inscription;
use\App\User;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscriptions.inscription');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscriptions = Inscription::All();
        return view('inscriptions.inscriptionlist', compact('inscriptions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $inscripts = Inscription::finfOrFail($id);
      $this->validate($request, [
        'classe_1' => 'required|max:255',
        'referent_1' => 'required|max:255',
        'nombre_1' => 'required|max:255',
        'accompagnant_1' => 'required|max:255',
        'etablissement' => 'required|max:255',
        'adresse' => 'required|max:255',
        'code' => 'required|max:255',
        'telephone' => 'required|max:255',
        'mail_1' => 'required|max:255',
        'mail_2'=> 'required|max:255',
      ]);
      $input = $request->all();
      $inscripts->fill($input)->save();

      return back()
        ->with('success','vous êtes inscrit.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inscription::findOrFail($id)->delete();
    }
}
