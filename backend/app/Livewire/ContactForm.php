<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ContactForm extends Component
{
    #[Validate('required|string|min:2|max:100')]
    public string $name = '';

    #[Validate('required|email:rfc,dns|max:255')]
    public string $email = '';

    #[Validate('required|string|min:20|max:3000')]
    public string $message = '';

    public bool $sent = false;

    public function submit(): void
    {
        $this->validate();

        try {
            Mail::raw($this->message, function ($mail): void {
                $mail->to(config('portfolio.profile.email'))
                    ->replyTo($this->email, $this->name)
                    ->subject('Portfolio contact from '.$this->name);
            });

            $this->reset(['name', 'email', 'message']);
            $this->sent = true;
        } catch (\Throwable $e) {
            report($e);
            $this->addError('send', 'Message could not be sent right now. Please email me directly.');
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
