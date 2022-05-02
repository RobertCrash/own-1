<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

      <div name="IMAP LOGIN" class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg border-2 border-solid border-black">
        {{ __('IMAP Login (atm: should used for Login with imap OR if user has created credentials when using OAuth (google,ms,...))') }}
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-4">
              <x-label for="email" :value="__('Email')" />
              <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>

            <div class="flex items-center justify-center mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                        {{ __('>> Register? <<') }}
                    </a>
            </div>
        </form>
      </div>
      <div name="OAuth LOGIN" class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg border-2 border-solid border-black">
          {{ __('OAuth Login & Register') }}
        <div class="max-w-sm rounded overflow-hidden bg-gray-200">
            {{-- Login with OAuth --}}
            <div class="flex items-center justify-end m-6">
                <a class="btn m-6" href="{{ url('login/google') }}"
                    style="background: #3B5499; color: #ffffff; padding: 10px; margin: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Google
                </a>
                <a class="btn m-6" href="{{ url('login/microsoft') }}"
                    style="background: #3B5499; color: #ffffff; padding: 10px; margin: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Microsoft
                </a>
                <a class="btn m-6" href="{{ url('login/yahoo') }}"
                    style="background: #3B5499; color: #ffffff; padding: 10px; margin: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with Yahoo
                </a>
            </div>
          </div>
      </div>
    </x-auth-card>
</x-guest-layout>
