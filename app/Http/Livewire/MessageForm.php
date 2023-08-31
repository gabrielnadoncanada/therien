<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageForm extends Component
{
    public $name;
    public $email;
    public $message;

    public function submitForm()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Message::create($validatedData);

        // TODO: Add logic to send email if SMTP or Gmail is configured.

        session()->flash('message', 'Message sent successfully.');
    }

    public function render()
    {
        return view('livewire.message');
    }
}
