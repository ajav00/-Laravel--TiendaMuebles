<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicPagesController extends Controller
{
    public function getHome(){
        return view('pages.home');
    }
    public function getAboutUs(){
        return view('pages.aboutUs');
    }
    public function getLogin(){
        return view('auth.login');
    }
    public function getCreateAccount(){
        return view('auth.createAccount');
    }
    
    public function getCatalog(){
        return view('pages.catalog');
    }
    
    
}
