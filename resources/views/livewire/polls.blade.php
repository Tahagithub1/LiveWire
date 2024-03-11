<div>
 <h1 class="mb-4 text-xl">
    Polls
 </h1>

 <div class="mb-4">
  @forelse ($poll as $polls)
  <h2 class="mb-4 text-xl">
    {{ $polls->title }}
  </h2>
  @foreach ($polls->options as $option)

<div class="mb-4">
    <button class="btn" wire:click="Vote({{$option->id}})"> Vote </button>
    {{ $option->name }} ({{ $option->vote->count() }})
</div>

  @endforeach

  @empty
   <div>
    <p class="color:red">
      No Poll Found
    </p>
   </div>
  @endforelse
 </div>
</div>
