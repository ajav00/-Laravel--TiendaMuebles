<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAdminController extends Controller
{
    public function getAdmin(){
        return view('admin.admin.get');
    }
}
