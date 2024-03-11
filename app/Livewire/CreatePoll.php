<?php

namespace App\Livewire;

use App\Models\Poll;
use Livewire\Component;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CreatePoll extends Component
{
    public $title;

    public $options = ['first'];

    protected $rules = [
       'title' => 'required|min:3|max:255',
       'options' => 'required|array|min:1|max:10',
       'options.*' => 'required|max:255'
    ];


    protected $messages = [
        'options.*' => 'The option can\'t empty'
    ];





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

    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);

    }

    public function createPoll()  {

        $this->validate();
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
        $this->reset('title' , 'options');
        // $this->emit('PollCreated');

    }
}
