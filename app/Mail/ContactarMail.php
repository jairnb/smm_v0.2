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
        //$data = ['Pais' => $request->pais, 'Menssagem: ' => $request->mensagem];
        return $this->view('contactar', [$request->mensagem])
                        ->from($request->email, $request->nome)
                        ->to('jair.praia.cv@gmail.com', 'Pedro Fernandes')
                        ->subject($request->assunto);
    }
}
