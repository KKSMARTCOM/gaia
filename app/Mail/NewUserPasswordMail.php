<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class NewUserPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $generatedPassword;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, $generatedPassword)
    {
        $this->user = $user;
        $this->generatedPassword = $generatedPassword;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->view('mail.new_user_password') 
                ->subject('Votre compte utilisateur a été créé') 
                ->with([
                    'user' => $this->user,
                    'generatedPassword' => $this->generatedPassword,
                ]);
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
