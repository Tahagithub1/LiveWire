<div>
   <form wire:submit.prevent="createPoll">
    <label> poll title </label>
    <input type="text" wire:model.live="title" />
    this : {{ $title }}
    <div class="mb-4 mt-4">
         <button class="btn" wire:click.prevent="AddOption"> add option </button>
    </div>
    @foreach ($options as $index => $option)
    <div class="mb-4">
        <label> option {{ $index + 1 }} </label>
        <div class="flex gap-2" >
            <input type="text" wire:model="options.{{ $index }}">
                <button class="btn" wire:click.prevent="RemoveOption({{ $index }})"  > Remove </button>
            {{-- {{ $index }} - {{ $option }} --}}
        </div>
        @endforeach
        <div class="mb-4">
            <button class="btn" type="submit"> create poll </button>
        </div>
    </div>


   </form>
</div>
