<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\BroadcastMessage;

class NewNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $title;
    protected $description;
    protected $sender;

    public function __construct($title, $description, $sender)
    {
        $this->title = $title;
        $this->description = $description;
        $this->sender  = $sender;
    }

    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'sender_id' => $this->sender->id,
            'sender_name' => $this->sender->full_name,
        ];
    }

    public function toBroadcast($notifiable)
    {
        return new BroadcastMessage([
            'title'     => $this->title,
            'description' => $this->description,
            'sender_id'   => $this->sender->id,
            'sender_name' => $this->sender->full_name,
        ]);
    }
}
