<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function getIndex()
    {
		$arrayPeliculas = Video::all();
        return view('catalog.index', ['arrayPeliculas'=>$arrayPeliculas]);
    }
    public function getShow($id)
    {
		$video = Video::find($id);
        return view('catalog.show', ['pelicula'=>$video]);
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function postCreate(Request $request)
    {
		$video = new Video();
		$video->titulo = $request->input('titulo');
		$video->year = $request->input('year');
		$video->director = $request->input('director');
		$path = $request->file('poster')->store('posters', 'public');
		$video->poster = $path;
		$video->rentada = $request->input('rentada')!==null?1:0;
		$video->sinopsis = $request->input('sinopsis');
		$video->save();
		// dd($video);
    }
    public function getEdit($id)
    {
		$pelicula = Video::find($id);
        return view('catalog.edit', ['pelicula'=>$pelicula]);
    }
    
}
