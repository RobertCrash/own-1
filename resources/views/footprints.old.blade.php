<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Footprints') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                @foreach( $footprints as $footprint )
                  <div class="p-6 bg-white border-b border-gray-200">
                    <img class="w-20 h-20 fill-current text-gray-500" src="data:image/png;base64, {{ $footprint->company->image }}" alt="Red dot" />
                      {{ $footprint->company->name }}
                  </div>
                @endforeach
                @if( $footprints->isEmpty() )
                <div class="p-6 bg-white border-b border-gray-200">
                   NO FOOTPRINTS
                 </div>
                @endif

            </div>
        </div>
    </div>
</x-app-layout>
