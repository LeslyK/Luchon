<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Category;
use\App\Post;
use\App\User;

class PostsController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function create(){
        //
    }

    public function formerCreate()
  {
    return view('page.creation');
  }

    public function actualite(){
        return view('accueil.actualite');
    }

    public function list(){

        $posts = post::All();

        return view('page.list')->withPosts($posts);
    }

    public function listAdmin(){

        $posts = post::All();
      return view('page.adminlist')->withPosts($posts);
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'content' => 'required',
            ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->image = $request->input('image');
        $post->content = $request->input('content');
        $post->save();
        // return redirect()->route('liste');
        return back()->with('success','Post Uploaded successfully.');
    }

    public function edit($id){
      dd($id);
        $posts = Post::findOrFail($id);
        return view('page.modification')->withPost($posts);
    }
    public function destroy($id){
      var_dump($id);
        $posts = Post::findOrFail($id);
        $posts->delete();
return;
        // return back()
        // ->with('success','Post removed successfully.');
    }

}
