<?php

namespace App\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.create-poll');
    }
}
