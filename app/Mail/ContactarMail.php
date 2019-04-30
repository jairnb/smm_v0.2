<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ContactarMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(request $request)
    {

        return $this->view('parts.contactar.contactarMail', 
                                ['nome'=> $request->nome,
                                'email' => $request->email, 
                                'assunto' => $request->assunto, 
                                'pais' => $request->pais, 
                                'mensagem' => $request->mensagem])
                            ->to('jair.praia.cv@gmail.com')
                            ->subject($request->assunto);
    }
}
