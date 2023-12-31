<?php
namespace App\Notifications;
use Illuminate\Notifications\Notification;

class NewOrderNotification extends Notification
{
    public function toDatabase($notifiable)
    {
        // Define the notification data to be stored in the database
        return [
            'order_id' => $this->order->id,
        ];
    }
}
