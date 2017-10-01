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
        // $post = [
        //     'tilte' => $request->input('tilte'),
        //     'description' => $request->input('description'),
        //     'image' => $request->input('image'),
        //     'content' => $request->input('content'),
        //   ];
        // Post::create($post);
        //Session::flash('flash_message', 'Article ajouté avec succès!');
        return redirect()->route('liste');
    }
    public function modifier($id){
        $post = Post::findOFail($id);
        return view('page.modification')->withPost($post);
    }

}
