<?php

namespace App\Livewire;

use Livewire\Component;

class GenerateUrl extends Component
{
    public $name;
    public $generatedUrl;

    public function generateUrl()
    {
        $this->validate([
            'name' => 'required|string|max:255',
        ]);

        // Membuat URL dengan parameter query `to`
        $this->generatedUrl = url('/home') . '?to=' . urlencode($this->name);

        // Dispatch event untuk menyalin URL ke clipboard
        $this->dispatch('urlGenerated', $this->generatedUrl);
    }

    public function render()
    {
        return view('livewire.generate-url');
    }
}
