<?php

namespace App\Providers;

use App\Events\OrderPaid;
use App\Listeners\UpdateProductSoldCount;
use App\Listeners\SendOrderPaidMail;
use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
        ],
        OrderPaid::class => [
            UpdateProductSoldCount::class,
            SendOrderPaidMail::class,
        ],
    ];


    public function boot()
    {
        parent::boot();

        
    }
}
