<x-guest-layout>

  <x-auth-session-status class="mb-4" :status="session('status')" />

  <div class="flex justify-center items-center w-full bg-white">
    <div class="card-container">
      <x-auth-signup-background :imagesrc="asset('signup_bg.svg')" :responsivesrc="asset('signup.svg')" />
      <div class="container__items">
        <a href="/" class="flex-center-center">
            <x-application-logo class="application-logo" />
        </a>

        <x-auth-form id="register-form" method="POST" action="{{ route('register') }}" name="Register">
          <div class="mt-4">
              <x-label class="label-style" for="name">Name</x-label>
              <x-auth-input id="name" type="text" name="name" value="{{old('name')}}" required autofocus />
          </div>
          @error('name')
          <div class="mt-4">
            {{ $errors->first('name') }}
          </div>
          @enderror

          <div class="mt-4">
              <x-label class="label-style" for="email">Email</x-label>
              <x-auth-input id="email" type="email" name="email" value="{{old('email')}}" required autofocus />
          </div>
          @error('email')
          <div class="mt-4">
            {{ $errors->first('email') }}
          </div>
          @enderror

          <div class="mt-4" x-data="{ show: true }" x-cloak>
            <x-label class="label-style" for="password">Password</x-label>
            <div class="relative">
              <x-auth-input id="password" ::type="show ? 'password' : 'text'"
                name="password" placeholder=""
                required autocomplete="new-password" />
              <x-auth-password-icon class="password-icon" />
            </div>
          </div>
          <div class="mt-4" x-data="{ show: true }" x-cloak>
            <x-label class="label-style" for="password_confirmation">Confirm Password</x-label>
            <div class="relative">
              <x-auth-input id="password_confirmation" ::type="show ? 'password' : 'text'"
                name="password_confirmation" placeholder=""
                required autocomplete="new-password" />
              <x-auth-password-icon class="password-icon" />
            </div>
          </div>
          @error('password')
          <div class="mt-4">
            {{ $errors->first('password') }}
          </div>
          @enderror

          <div class="flex-center-center mt-6">
            <span class="register-dash"></span>
          </div>

          <div class="mt-4">
              <x-label for="imap_provider_id" class="label-style" :value="__('IMAP Provider')" />
              <select id="imap_provider_id" class="imap-provider"
                name="imap_provider_id" >

                  <option>Select Provider</option>

                  @foreach ($imap_providers as $key => $value)
                      <option value="{{ $key }}">
                          {{ $value }}
                      </option>
                  @endforeach

              </select>
          </div>

          <div class="flex-center-center mt-6">
            <span class="register-dash"></span>
          </div>

          <div class="flex justify-between mt-4">
            <x-label class="agree-label">
             <x-auth-input id="terms" class="leading-loose text-pink-600"
              type="checkbox" name="terms" />
             <span class="remember--me__title">
               {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                 'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                 'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                    ])
                !!}
             </span>
            </x-label>
          </div>
        </x-auth-form>

        <x-auth-change-page class="flex-center-between mt-4" :route="route('login')" :title="'sign in'"/>
      </div>
    </div>
  </div>
</x-guest-layout>
