<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UsersNotifications extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $title, $message_mail, $subject)
    {
        //
        $this->user = $user;
        $this->title = $title;
        $this->content = $message_mail;
        $this->subject = $subject;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        /* dd($this->message_mail); */

        return $this->view('mails.user_notifications')
        ->with('user', $this->user)->with('title', $this->title)->with('content', $this->content)->with('subject', $this->subject)
        ->from('noreply@drone2map.com', 'Drone to Map')
        ->subject($this->subject);
    }
}
