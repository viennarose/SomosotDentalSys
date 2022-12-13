<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class notifyMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $firstName, $lastName, $schedule, $refNum;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstName, $lastName, $schedule, $refNum)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->schedule = $schedule;
        $this->refNum = $refNum;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Appointment Reminder',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.remindMail',

        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
