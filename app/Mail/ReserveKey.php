<?php

namespace SiteEspindola\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use SiteEspindola\Immobile;
use Illuminate\Http\Request;

class ReserveKey extends Mailable
{
    use Queueable, SerializesModels;

    public $immobile;
    public $contact;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Immobile $immobile, Request $contact)
    {
        $this->immobile = $immobile;
        $this->contact  = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Reserva de Chave para '.$this->contact->agency)
                                                ->view('email.reserveKey')
                                                ->with([
                                                    'title' => $this->contact->keys_cod_immobile                                                    
                                                ]);
    }
}
