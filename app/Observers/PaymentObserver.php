<?php

namespace App\Observers;

use App\Models\Payment;
use Event;
use App\Events\SendMailEvent;

class PaymentObserver
{
    
    /**
    * Listen to the Model created event.
    */
    public function created(Payment $payment)
    {
        \App\Jobs\PaymentJob::dispatch($payment);
        // Event(new SendMailEvent($payment->client->email));
    }
}
