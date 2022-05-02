<div class="two-factor-responsive">
    <h2 class="text-blue-uppercase">Update User Password</h2>

    <div class="password-update-container">

      <x-validation-errors class="mb-4" :errors="$errors->updatePassword"/>

      <x-success-message :message="session('status')"/>


      <form method="POST" action="{{ route('user-password.update') }}">
        @method('PUT')
        @csrf

        <div class="space-y-1">
           <x-label for="current_password" :value="__('Current Password')" />
           <x-input id="current_password" class="password-update-input focus:outline-none focus:shadow-outline"
                    type="password"
                    name="current_password"
                    autocomplete="current-password" />
        </div>
        <div class="space-y-1">
            <x-label for="password" :value="__('New password')" />
            <x-input id="password" class="password-update-input focus:outline-none focus:shadow-outline"
                     type="password"
                     name="password"
                     autocomplete="new-password" />
        </div>
        <div class="space-y-1">
            <x-label for="password_confirmation" :value="__('Confirm password')" />
            <x-input id="password_confirmation" class="password-update-input focus:outline-none focus:shadow-outline"
                     type="password"
                     name="password_confirmation"
                     autocomplete="new-password" />
        </div>

        <div class="flex justify-end pt-4">
          <x-button class="recovery-btn hover:bg-blue-600">
              {{ __('Update') }}
          </x-button>
        </div>
      </form>

    </div>
</div>
