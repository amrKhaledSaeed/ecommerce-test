<?php

namespace App\Providers;

use App\paymentGetway\payment;
use Illuminate\Support\ServiceProvider;

class paymentServiceProvide extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('payment',function(){
             return new payment();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
