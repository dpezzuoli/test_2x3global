<?php

namespace App\Listeners;

use App\Events\SendMailEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendMailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  SendMailEvent  $event
     * @return void
     */
    public function handle(SendMailEvent $event)
    {
        $client = $event->client;
        Mail::send('emails.mailEvent', ['client' => $client], function($message) use ($client) {
            $message->to($client);
            $message->subject('Event Testing');
        });
    }
}
