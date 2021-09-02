<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Inspectrequest;

class Inspect extends Notification
{
  use Queueable;

    protected $inspect;
    public function __construct(Inspectrequest $inspect)
    {
        $this->inspect = $inspect;
    }

    public function via($notifiable)
    {
         return ['mail'];
    }

 
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->from('admin@rjobycontractors.com','Ricky Joby Contractors ')
        ->subject($this->inspect->name. ' is Requesting to inspect '.$this->inspect->product->title)
        ->view('emails.inspect', ['inspect' => $this->inspect]);
    }
}
