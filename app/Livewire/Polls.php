<?php

namespace App\Livewire;

use App\Models\Option;
use Livewire\Component;

class Polls extends Component
{
    // protected $listeners = [
    //   'PollCreated' => 'render'
    // ];

    public function render()
    {
        $poll = \App\Models\Poll::with('options.vote')->latest()->get();
        return view('livewire.polls' , ['poll' => $poll]);
    }

    public function Vote(Option $optionID) {
    //   $option = \App\Models\Option::findOrFail($optionID);
    //   $option->vote()->create();
      $optionID->vote()->create();

    }
}
