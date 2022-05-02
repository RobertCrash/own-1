@extends('layouts.base')

@section('body')
  <div class="bg-white">
    {{-- 
      @isset($header)
      <!-- Page Heading -->
      <header class="h-screen bg-white shadow">
          <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
              {{ $header }}
          </div>
      </header>
      @endisset
    --}}
      <!-- Page Content -->
      <main class="container w-full h-[100vh] flex justify-center mx-auto">
        @yield('content')

        @isset($slot)
          {{ $slot }}
        @endisset
      </main>
  </div>
@endsection
