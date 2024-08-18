<?php

namespace App\Mail;

use App\Models\Email;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public Email $email;

    public function __construct(Email $email)
    {
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.notification')
            ->subject($this->email->subject)
            ->with(['body' => $this->email->body]);
    }
}
