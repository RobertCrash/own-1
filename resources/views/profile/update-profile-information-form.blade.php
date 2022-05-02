<div class="two-factor-responsive">
    <h2 class="text-blue-uppercase">Update Profile Information</h2>

    <div class="password-update-container">

      <x-validation-errors class="mb-4" :errors="$errors"/>
                          <x-success-message :message="session('status')"/>


      <form method="POST" action="{{ route('user-profile-information.update') }}">
              @csrf
              @method('PUT')

              <div class="space-y-1">
                  <x-label for="name" class="text-gray-500">{{ __('Name') }}</x-label>
                  <x-input type="text" name="name" value="{{ old('name') ?? auth()->user()->name }}" required autofocus
                      autocomplete="name"
                      class="password-update-input focus:outline-none focus:shadow-outline" />
              </div>

              <div class="space-y-1">
                  <x-label for="email" class="text-gray-500">{{ __('Email') }}</x-label>
                  <x-input type="email" name="email" value="{{ old('email') ?? auth()->user()->email }}" required autofocus readonly
                      class="password-update-input focus:outline-none focus:shadow-outline" />
              </div>

              <div class="flex justify-end pt-4">
                  <x-button type="submit"
                      class="recovery-btn hover:bg-blue-600">
                      {{ __('Update Profile') }}
                  </x-button>
              </div>
      </form>
    </div>
</div>
