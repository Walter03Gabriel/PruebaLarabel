<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

class ControllerMail extends Controller
{
    function index()
    {
     return view('form');
    }

    function send(Request $request){
        
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required'
           ]);
           
         $data = $request->all();
      
          $email = $request->input('email');
      
        Mail::to($email)->send(new SendMail($data));

        return back()->with('success', 'Enviado exitosamente!');
       


    }
}
