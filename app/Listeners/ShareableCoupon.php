<?php

namespace App\Listeners;

use App\Events\PurchaseProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ShareableCoupon
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
     * @param  PurchaseProcessed  $event
     * @return void
     */
    public function handle(PurchaseProcessed $event)
    {
       var_dump("share your Coupon");
    }
}
