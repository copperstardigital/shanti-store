<?php

namespace App\Notifications\Blog;

use App\Models\Post;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\FacebookPoster\FacebookPosterChannel;
use NotificationChannels\FacebookPoster\FacebookPosterPost;
use Psy\Exception\FatalErrorException;

class PostPublished extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param Post $post
     * @internal param User $user
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [FacebookPosterChannel::class];
    }

    public function toTwitter($post) {
        //return new TwitterStatusUpdate($post->headline . ' http://www.copperstardigital.com/blog/' . $post->slug);
    }

    public function toFacebookPoster($post) {
        return (new FacebookPosterPost($post->headline))
            ->withImage('http://shanti.scotthummel.net/uploads/1.jpg');
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
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');
    }

    /**
     * @param $post
     * @return array
     */
    public function toArray($post)
    {
        return [

        ];
    }
}
