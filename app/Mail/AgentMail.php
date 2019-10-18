<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class AgentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    // if we make this public (we also inserted it ourselves),
    // now the data object is available to our view

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        // since we're passing $data into our Mailable INSTANCE,
        // we need to let the class know it is accepting the INSTANCE
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.agent-mail');
    }
}
