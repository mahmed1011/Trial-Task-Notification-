<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisterNotification extends Notification
{
    use Queueable;
    public $user;
    /**
     * Create a new notification instance.
     */
    public function __construct(User $user)
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
        return ['database'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    // public function toArray(object $notifiable): array
    // {
    //     return [
    //         'user_id' => $this->user['id'],
    //         'name' => $this->user['name'],
    //         'email' => $this->user['email'],
    //         'message' => 'Welcome to our website! We are excited to have you on board.',
    //     ];
    // }

    public function toMail($notifiable)
    {
        $emailContent = $this->user->notifications->first()->data['message'];

        return (new MailMessage)
            ->line($emailContent)
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'name' => $this->user->name,
            'email' => $this->user->email,
            'message' => 'Welcome to our website! We are excited to have you on board.',
        ];
    }
}
