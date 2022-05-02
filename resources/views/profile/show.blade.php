<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="profile-container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-validation-errors class="mb-4" :errors="$errors"/>

                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <x-success-message :message="session('status')"/>

                    <div class="sm:mx-auto sm:w-full sm:max-w-lg">
                    </div>

                    <div>
                      @include('profile.update-profile-information-form')
                    </div>
                    <div>
                      @include('profile.update-password-form')
                    </div>
                    <div>
                      @include('profile.two-factor-authentication')
                    </div>
                    @if (auth()->user()->provider == 'pop3_imap')
                      <div>
                        @include('profile.update-email-settings-form')
                      </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
