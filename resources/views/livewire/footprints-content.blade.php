<div class="container">
    <div x-data="{ tab: $persist('explore') }" class="">

    <div class="flex flex-row w-full">

        <a href="#" class="px-4 mx-2 border-2 rounded border-gray-900 hover:border-teal-300 w-28 min-w-28 text-center" 
          x-on:click.prevent="tab='explore'"
          x-bind:class="{ 'bg-red-400 border-red-400': tab === 'explore' }">
          <span class="">Explore</span>
        </a>
          
        <a href="#" class="px-4 mx-2 border-2 rounded border-gray-900 hover:border-teal-300 w-28 min-w-28 text-center" 
          x-on:click.prevent="tab='all'"
          x-bind:class="{ 'bg-red-400 border-red-400': tab === 'all' }">
          <span class="">All</span>
        </a>
          
        <a href="#" class="px-4 mx-2 border-2 rounded border-gray-900 hover:border-teal-300 w-28 min-w-28 text-center" 
          x-on:click.prevent="tab='keep'"
          x-bind:class="{ 'bg-red-400 border-red-400': tab === 'keep' }">
          <span class="">Keep</span>
        </a>
          
    </div>

    <div class="p-2">
    <div x-show="tab == 'explore'" x-cloak>
        @livewire('footprints-content.tab-explore')
    </div>
    
    <div x-show="tab == 'all'" x-cloak>
        @livewire('footprints-content.tab-all')
    </div>
    
    <div x-show="tab == 'keep'" x-cloak>
        <p>This is the content of Tab 3</p>
    </div>
    </div>
    </div>
</div>

@push('styles')
    <style>
    </style>    
@endpush

@push('scripts')
    <script>
    </script>
@endpush