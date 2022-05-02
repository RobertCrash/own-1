<section class="rounded shadow-lg border-gray-400 bg-gray-400 m-2 p-2">
    <p>This is the content of Tab 1</p>
    <div class="m-2">
        {{ $footprints->links() }}
    </div>
    
    <input type="text" wire:model="searchTerm" />
    {{-- <input type="text" wire:model="searchTerm" wire:keydown.enter="searchTerm" /> --}}

    <div class="grid place-items-center gap-2 p-4 grid-cols-2 lg:grid-cols-3">
    @foreach ($footprints as $footprint)
      <div class="flex flex-col items-center text-center p-6 bg-white rounded border-gray-200 w-full">
          {{ $footprint }}
      </div>
    @endforeach
    </div>

</section>
