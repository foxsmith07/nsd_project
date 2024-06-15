<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function contactMe(){
        return view('contactMe');
    }
    public function aboutMe(){
        return view('aboutMe');
    }
    public function mailMe(Request $request){
        $name = $request->name;
        $email = $request->email;
        $object = $request->object;
        $body = $request->body;

        $content = compact('name','email','object','body');

        Mail::to('support@foxproductio.com')->send(new ContactMe($content));

        return redirect()->route('monitoring')->with('msg','Mail successfullt sent.. We\'ll reply as soon as possible');


        
    }
}
