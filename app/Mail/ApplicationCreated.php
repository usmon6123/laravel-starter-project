<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }


    public function build()
    {
        $mail =  $this->from('example@company.com', 'Example tester')
            ->subject('Application Created')
            ->view('emails.application-created');

        if (!(is_null($this->application->file_url) || $this->application->file_url == '')){
            $mail = $this->attachFromStorageDisk('public', $this->application->file_url);
        }
        return $mail;
    }

}
