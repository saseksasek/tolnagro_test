<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Email;
use App\Mail\NotificationEmail;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    protected $signature = 'emails:send';
    protected $description = 'Send all emails to three random addresses in every minute';

    public function handle()
    {
        $emails = Email::all();

        foreach ($emails as $email) {
            for ($i = 0; $i < 3; $i++) {
                Mail::to("testemail.{$i}@email.com")->send(new NotificationEmail($email));
            }
            $email->increment('send_count');
        }

        $this->info('Emails sent successfully!');
    }
}
