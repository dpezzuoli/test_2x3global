<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models;
use App\Observers;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\Models\Payment::observe(\App\Observers\PaymentObserver::class);
    }
}
