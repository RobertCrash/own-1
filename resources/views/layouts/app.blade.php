@extends('layouts.base')

@section('body')
  <div class="flex md:flex-row-reverse flex-wrap bg-white">
    {{-- @include('layouts.navigation') --}}
    {{-- @livewire('layouts.navigation') --}}

    <div class="w-full h-screen bg-white md:pl-48">

      @isset($header)
        <!-- Page Heading -->
        <header class="header fixed w-full h-16 z-10">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
      @endisset

      <!--Main Content-->
      <main class="main container relative overflow-hidden w-full pt-16 pb-24 md:pb-0 px-6 mx-auto">
        @yield('content')

        @isset($slot)
          {{ $slot }}
        @endisset   
      </main>
    </div>

    <!--Sidebar-->
    @include('layouts.navigation')
  </div>
@endsection

