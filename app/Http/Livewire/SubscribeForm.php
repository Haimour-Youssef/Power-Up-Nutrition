<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\GuideMail;

class SubscribeForm extends Component
{
    public $name = '';
    public $email = '';
    public $success = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:subscribers,email',
    ];

    public function submit()
    {
        $this->validate();
        $subscriber = Subscriber::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);
        // Send guide email
        Mail::to($this->email)->send(new GuideMail($subscriber));
        $this->success = true;
        $this->reset(['name', 'email']);
    }

    public function render()
    {
        return view('livewire.subscribe-form');
    }
}
