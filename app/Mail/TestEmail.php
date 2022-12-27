<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $email;
    private $nome;
    private $valor;
    private $livro;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $nome, $valor, $livro)
    {
        $this->email = $email;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->livro = $livro;
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('lukassilvabernardi@outlook.com', 'lukas'),
            subject: 'Test Email',
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
            view: 'mail.teste',
            with: [
                'nome' => $this->nome,
                'email' => $this->email,
                'valor' => $this->valor,
                'livro' => $this->livro,
            ]
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
