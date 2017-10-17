<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\User;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::with('Photos')->get();
        return view('albums.index')->with('albums', $albums);
    }

    public function create()
    {
        $users = User::all();
        return view('albums.create', compact('users'));

    }

    public function store(Request $request){
        $this->validate($request, [
          'name' => 'required',
          'cover_image' => 'mimes:jpeg,bmp,png,gif,svg,pdf,psd,gif','max:1999',
        ]);


  
        // Get filename with extension
        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
  
        // Get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
  
        // Get extension
        $extension = $request->file('cover_image')->getClientOriginalExtension();
  
        // Create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
  
        // Uplaod image
        $path= $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);
  
        // Create album
        $album = new Album;
        $album->name = $request->input('name');
        $album->user_id = $request->input('user');
        $album->description = $request->input('description');
        $album->cover_image = $filenameToStore;

        $album->save();

        return redirect('/albums')->with('success', 'Album Criado Com Sucesso');
    
      }

      public function show($id){
        $album = Album::with('Photos')->find($id);
        return view('albums.show')->with('album', $album);
      }
}
