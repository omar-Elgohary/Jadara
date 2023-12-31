<?php

namespace App\Listeners;

use App\Events\NewOrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewOrderNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(NewOrderCreated $event)
    {
        // Access the order from the event
        $order = $event->order;

        // Send notification through the Database channel
        // (Assuming you have a notifications table in your database)
        $order->notify(new \App\Notifications\NewOrderNotification);

        // Send notification through the Mail channel
        \Mail::to('admin@xyz.com')->send(new \App\Mail\NewOrderMail($order));
    }
}
