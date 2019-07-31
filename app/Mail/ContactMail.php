<?php

namespace SiteEspindola\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use SiteEspindola\Immobile;


class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $immobile;
    public $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Immobile $immobile, $contact)
    {
        $this->immobile = $immobile;
        $this->contact  = $contact;
        //dd($this->contact);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Mensagem do Site")->view('email.contact');
    }
}
