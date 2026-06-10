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
                $configKey = app()->getLocale() === 'fr' ? 'portfolio_fr' : 'portfolio';

                $mail->to(data_get(config($configKey), 'profile.email', config('portfolio.profile.email')))
                    ->replyTo($this->email, $this->name)
                    ->subject(__('portfolio.form.subject', ['name' => $this->name]));
            });

            $this->reset(['name', 'email', 'message']);
            $this->sent = true;
        } catch (\Throwable $e) {
            report($e);
            $this->addError('send', __('portfolio.form.send_error'));
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
