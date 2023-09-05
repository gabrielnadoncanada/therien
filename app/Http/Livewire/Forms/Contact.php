<?php

namespace App\Http\Livewire\Forms;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $tel;
    public $message;

    protected $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'tel' => 'required',
        'message' => 'required',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

        $message = Message::create($validatedData);

        session()->flash('message', 'Message sent successfully.');

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.forms.contact');
    }
}
