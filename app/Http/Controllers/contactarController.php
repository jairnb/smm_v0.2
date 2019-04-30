<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\mail\ContactarMail;

class contactarController extends Controller
{
    public function index()
    {
        return view('contactar');
    }

    public function enviarEmail(request $request)
    {
        Mail::send(new ContactarMail());
        return back()->with('success', 'Obrigado pela mensagem!');        
    }
}
