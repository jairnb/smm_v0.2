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
       
        $data = [$request->mensagem];
// dd($request->mensagem);
        Mail::send(['text'=> 'contactar'], $data, function ($message) use ($request) {
            $message->from($request->email, $request->nome);
            $message->sender($request->email, $request->nome);
            $message->to('jair.praia.cv@gmail.com', 'Jair Fernandes');
            // $message->cc('john@johndoe.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
            // $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject($request->assunto);
            // $message->line($request->mensagem);
            // $message->priority(3);
            // $message->attach('pathToFile');
        });
       // return redirect('contactar');
    //   Mail::send(new ContactarMail());
        return back()->with('success', 'Obrigado pela mensagem!');
        
    }
}
