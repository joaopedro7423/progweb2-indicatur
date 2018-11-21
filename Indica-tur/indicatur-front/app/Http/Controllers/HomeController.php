<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    *public function __construct()
    *{
    *    $this->middleware('auth');
    *}
    */
    
    public function home()
    {
        return view('homepage.index');
    }
    public function logar()
    {
        return view('logar');
    }
}
