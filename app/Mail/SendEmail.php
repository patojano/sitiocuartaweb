<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $msg;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $subject, $msg)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->msg = $msg;
    }

    public function build()
    {
        return $this->from($this->email)
            ->to('contacto@cuartaweb.cl')
            ->subject($this->subject)
            ->view('sitio.mails.sendemail')
            ->with(['name' => $this->name, 'msg' => $this->msg]);
    }
}
