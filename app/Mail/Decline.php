<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Decline extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $evenement;

    public function __construct($user, $evenement)
    {
        $this->user = $user;
        $this->evenement = $evenement;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Decline',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.declinaison',
            with:[
                'userName' => $this->user->name,
                'evenementNom' => $this->evenement->nom,
                'evenementDate' => $this->evenement->date_evenement,
                'evenementLieu' => $this->evenement->lieu,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
