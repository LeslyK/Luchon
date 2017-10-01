<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use\App\Category;
use\App\Action;
use\App\User;

class ActionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = Action::All();
        return view('festival.actions.action')->withActions($actions);
    }

    public function list()
    {
      return view('festival.actions.listaction');
    }

    public function description()
    {
      return view('festival.actions.actiondescript');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('festival.actions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required|max:255',
          'description' => 'required|max:255',
          'image' => 'required',
          'content' => 'required',
          ]);
      $action = new Action;
      $action->title = $request->input('title');
      $action->description = $request->input('description');
      $action->image = $request->input('image');
      $action->content = $request->input('content');
      $action->save();

      return view('festival.actions.listaction');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $action = Action::findOrFail($id);

        return view('festival.actions.action', compact('action'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $action = Action::findOrFail($id);

  return view('festival.actions.edit')->withFormation($action);
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
      $action = Action::findOrFail($id);

      $this->validate($request, [
          'title' => 'required|max:255',
          'description' => 'required|max:255',
          'image' => 'required',
          'content' => 'required',
          ]);

      $input = $request->all();

      $formation->fill($input)->save();

      Session::flash('flash_message', 'La formation a été modifiée avec succès!');

      return redirect()->route('actionList');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $action = Action::findOrFail($id);

  $action->delete();

  Session::flash('flash_message', 'L action a été supprimée avec succès!');
    }
}
