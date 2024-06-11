<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    #[Rule(['required', 'min:3'])]
    public $title;

    #[Rule(['required', 'min:10'])]
    public $body;

    public $image;

    public $published;

    public function store()
    {
        $post = Auth::user()->posts()->create([
            ...$this->validate(),
            'slug' => str($this->title)->slug(),
        ]);

        flash('Post created successfully!', 'success');

        $this->reset();

        return $post;
    }
}
