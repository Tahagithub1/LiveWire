<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CreatePoll extends Component
{
    public $title;

     public $options = ['first'];

    public function render()
    {
        return view('livewire.create-poll');
    }
    public function AddOption()  {

    $this->options[] = '';

    }

    public function RemoveOption($index)  {

     unset($this->options[$index]);
      $this->options = array_values($this->options);

    }

    public function createPoll()  {

    //  $poll = Poll::create([
    //     'title' => $this->title
    //  ]);

    //  foreach ($this->options as $optionName){
    //     $poll->options()->craete(['name' => $optionName]);
    //  }
    
    Poll::create([
        'title' => $this->title
    ])->options()->createMany(
            collect($this->options)
                ->map(fn($option) => ['name' => $option])
                ->all()
        );

    }
}
