<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\ImageGallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = ImageGallery::All();

        return view('galeries.image-gallery', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
      $images = ImageGallery::All();
      return view('galeries.list-gallery',compact('images'));
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
    public function update(Request $request)
    {
      $this->validate($request, [

      'title' => 'required',
          'comment'=>'required',
          'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);

      $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
      $request->image->move(public_path('images'), $input['image']);

      $input['title'] = $request->title;
      $input['comment']=$request->comment;

      ImageGallery::create($input);

    return back()

      ->with('success','Image Uploaded successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      ImageGallery::find($id)->delete();

    return back()

      ->with('success','L"image a ete supprimé avec succès.');
    }
}
