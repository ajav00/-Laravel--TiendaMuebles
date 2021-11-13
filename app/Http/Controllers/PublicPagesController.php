<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function getHome(){
        retun view('Index');
    }
    public function getAboutUs(){
        retun view('AboutUs');
    }
    public function getLogin(){
        return view('Login');
    }
    public function getCreateAccount(){
        return view('CreateAccount');
    }
    
    public function getCatalog(){
        return view('Catalog');
    }
    
    
}
