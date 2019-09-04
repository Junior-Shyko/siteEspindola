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
    public $date;
    public $agency;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Immobile $immobile, $contact, $date, $agency)
    {
        $this->immobile = $immobile;
        $this->contact  = $contact;
        $this->agency = $agency;
        $this->date = $date;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       
       try {
        return $this->subject("Lead para ".$this->agency)->view('email.contact');
       } catch (\Throwable $th) {
           return $th->getMessage();
       }
    }
}
