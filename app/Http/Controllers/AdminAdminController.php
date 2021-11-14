<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use Illuminate\Http\Request;

class AdminAdminController extends Controller
{
    public function getAdmin(){
        $arrayAdmin = Administrator::all();
        return view('admin.admin.get', ['arrayAdmin'=>$arrayAdmin]);
    }
    public function createAdmin(){
        return view('admin.admin.create');
    }
    public function postAdmin(Request $request)
    {
      $validated = $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required',
        'password' => 'required',
        'celular' => 'required',
        'puesto' => 'required',
        'direccion' => 'required',
      ]);
      $administrator = new Administrator();
      $administrator->nombre = $request->input('nombre');
      $administrator->apellido = $request->input('apellido');
      $administrator->puesto = $request->input('puesto');
      $administrator->email = $request->input('email');
      $administrator->password = $request->input('password');
      $administrator->celular = $request->input('celular');
      $administrator->direccion = $request->input('direccion');
      $administrator->save();
      return redirect('/getAdmin');
		// dd($video);
    }
    public function editAdmin($id)
    {
		$administrator = Administrator::find($id);
        return view('admin.admin.modify', ['administrator'=>$administrator]);
    }
}
