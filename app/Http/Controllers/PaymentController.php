<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Http\Requests\StorePayment;
use App\Jobs\PaymentJob;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request['client']) {
            return response(['message' => 'client value is required '], 400);
        }
        return Payment::where('client_id', $request['client'])->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePayment $request)
    {
        $validated = $request->validated();
        $payment = Payment::create($validated);
        return $payment;
    }

}
