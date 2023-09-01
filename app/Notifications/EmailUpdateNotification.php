<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailUpdateNotification extends Notification
{
    use Queueable;
    protected $user;
    /**
     * Create a new notification instance.
     */
    public function __construct(User $user) // Pass the user object as a parameter
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line('Your email address has been updated.')
            ->line('New Email: ' . $this->user->email) // Access the user's email property
            ->line('If you didn\'t request this change, please contact us.');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Your email address has been updated to ' . $this->user->email,
        ];
    }

}
