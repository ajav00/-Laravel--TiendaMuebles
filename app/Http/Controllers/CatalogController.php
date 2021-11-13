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
		$pelicula = Video::find($id);
        return view('catalog.show', ['pelicula'=>$pelicula]);
    }
    public function getCreate()
    {
        return view('catalog.create');
    }
    public function getEdit($id)
    {
		$pelicula = Video::find($id);
        return view('catalog.edit', ['pelicula'=>$pelicula]);
    }
    
}
