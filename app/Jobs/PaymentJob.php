<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Payment;
use Event;
use App\Events\SendMailEvent;

class PaymentJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $payment;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $clp_usd = 0;
        $payments = Payment::whereDate('created_at', '=', date('Y-m-d'))
        ->where('id','<>', $this->payment->id)
        ->get();

        if(count($payments) > 0){
            // get USD from last row
            $clp_usd = $payments->first()->clp_usd;
        } else {
            // get USD from API
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://mindicador.cl/api');
            $body = json_decode($response->getBody()->getContents(), true);
            $clp_usd = $body['dolar']['valor'];
        }

        $this->payment->clp_usd = $clp_usd;
        $this->payment->save();

        // send mail
        Event(new SendMailEvent($this->payment->client->email));
    }
}
