<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div name="No1" class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg border-2 border-solid border-black">
            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>
            </div>

            <div name="No1" class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg border-2 border-solid border-black">
              {{ __('IMAP CONFIGURATION') }}<br>
              {{ __('atm:') }}<br>
              {{ __('1- user MUST provide valid imap config during registration') }}<br>
              {{ __('2- NO cutom imap/smtp config') }}<br>
              {{ __('3- above Email/Password will is used as imap/smtp credentials') }}<br>
              <br>
              {{ __('!!! NO imap connectivity check/verification during registration') }}<br>

              <div class="mt-4">
                  <x-label for="imap_provider_id" :value="__('IMAP Provider')" />
                  {{ __('<test begin>') }}<br>
                  @foreach ($imap_providers as $key => $value)

                    <p>
                      {{ $key }} : {{ $value }}
                    </p>

                  @endforeach
                  {{ __('<test end>') }}<br><br>
                  <select id="imap_provider_id" name="imap_provider_id" >

                      <option>Select Provider</option>

                      @foreach ($imap_providers as $key => $value)

                          <option value="{{ $key }}">

                              {{ $value }}

                          </option>

                      @endforeach

                  </select>

              </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
