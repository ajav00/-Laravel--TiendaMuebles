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
}
