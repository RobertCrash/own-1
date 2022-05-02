<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Footprints') }}
        </h2>
    </x-slot>

    @livewire('footprints-content')

</x-app-layout>
