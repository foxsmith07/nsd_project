<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function contactUs(){
        return view('contactUs');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
}
