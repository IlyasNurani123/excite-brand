<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class contactUs extends Notification
{
    use Queueable;
    public ContactLead $lead;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactLead $lead)
    {
        $this->lead = $lead;
        dd( $this->lead = $lead);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
                    ->greeting('hi!')
                    ->line($this->lead['full_name'])
                    ->from(".$this->lead['email'].")
                    ->replyTo(".$this->lead['email'].")
                    ->line('Contact ' . $this->lead['contact_no'])
                    ->line($this->lead['message'])
                    ->line('Thank you for Contacting Us!');
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
            //
        ];
    }
}
