<?php

namespace cdn\Http\Controllers;
use Illuminate\Bus\Queueable;
use cdn\Mail;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class MailController extends Controller
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
    public function getMail()
    {
        return $this->view('tests.mail');
    }
}
