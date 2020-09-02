<?php

namespace App\Notifications;

use App\Publication;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCommentPosted extends Notification
{
    use Queueable;

    protected $user;
    protected $publication;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Publication $publication, User $user)
    {
        $this->publication= $publication;
        $this->user= $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [

            'publication_id'=> $this->publication->id,
            'name'=> $this->user->name,
            'last_name'=> $this->user->last_name,
            'avatar'=> $this->user->avatar
        ];
    }
}
