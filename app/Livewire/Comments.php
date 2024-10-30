<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;

class Comments extends Component
{
    public $comments;
    public $name; // Nama pengirim
    public $message;
    public $parent_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function mount()
    {
        $this->comments = Comment::with('replies')->get();
        $this->parent_id = null;
    }

    public function submitComment()
    {
        $this->validate();

        Comment::create([
            'name' => $this->name,
            'parent_id' => $this->parent_id,
            'message' => $this->message,
        ]);

        // Refresh daftar komentar
        $this->comments = Comment::with('replies')->get();

        // Reset form
        $this->name = '';
        $this->message = '';
        $this->parent_id = null;
    }

    public function reply($commentId)
    {
        $this->parent_id = $commentId;
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
