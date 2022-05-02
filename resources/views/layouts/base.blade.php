<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Extras -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

                <!-- Alpine Plugins -->
                <script  src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>

        <link
          rel="stylesheet"
          href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
        />
      
        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

        <style>
         [x-cloak] { display: none !important; }
        </style>

        @livewireStyles

        @stack('styles')

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="font-sans antialiased bg-white">
      {{-- @include('layouts.navigation') --}}
      {{-- @livewire('layouts.navigation') --}}
      
      @yield('body')

      @livewireScripts

      @stack('scripts')
    </body>
</html>
