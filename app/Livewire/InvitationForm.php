<?php

namespace App\Livewire;

use App\Models\Guest;
use Livewire\Component;

class InvitationForm extends Component
{
    public $name;
    public $attendance;

    protected $rules = [
        'name' => 'required|string',
        'attendance' => 'required|integer',
    ];

    public function submit()
    {
        $this->validate();

        Guest::create(['name' => $this->name, 'attendance' => $this->attendance]);

        // Optionally, reset form fields after submission
        $this->reset(['name', 'attendance']);

        // Optionally, emit an event or show a success message
        session()->flash('guest_register_success', 'Kehadiran telah dikonfirmasi!');
    }
    public function render()
    {
        return view('livewire.invitation-form');
    }
}
