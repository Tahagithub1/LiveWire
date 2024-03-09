<div>
   <form>
    <label> poll title </label>
    <input type="text" wire:model.live="title" />
    this : {{ $title }}
    <div class="mb-4 mt-4">
         <button class="btn" wire:click.prevent="AddOption"> add option </button>
    </div>
    @foreach ($options as $index => $option)
    <div class="mb-4">
        <label> option {{ $index + 1 }} </label>
        <div class="mb-4" >
            <input type="text" wire:model="options.{{ $index }}">
            <div class="mb-4">
                <button class="btn" wire:click.prevent="RemoveOption({{ $index }})"  > Remove </button>
            </div>
            {{-- {{ $index }} - {{ $option }} --}}
        </div>

    </div>
    @endforeach

   </form>
</div>
