<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage(){
        return view('welcome');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function contactUs(){
        return view('contactUs');
    }
    public function submit(Request $request){
        $email=$request->input('email');
        $name=$request->input('name');
        $description=$request->input('description');
        /* modo di inviare la mail */
        Mail::to('amministrazione@email.it')->send(new ContactMail($email,$name,$description));
    }


}
