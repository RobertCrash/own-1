<div class="two-factor-responsive">
    <h2 class="update-settings">Update IMAP/POP3 Settings</h2>

    <div class="update-container">

      <x-validation-errors class="mb-4" :errors="$errors"/>
      <x-success-message :message="session('status')"/>


      <form method="POST" action="{{ route('user-email-settings.update') }}">
            @csrf
            @method('PUT')

            <div class="space-y-1">
                <x-label for="provider_imap_srv" class="text-gray-500">{{ __('IMAP SERVER') }}</x-label>
                <x-input type="text" name="provider_imap_srv" value="{{ old('provider_imap_srv') ?? auth()->user()->provider_imap_srv }}" required autofocus
                    autocomplete="provider_imap_srv"
                    class="provider-imap-srv" />
            </div>

            <div class="space-y-1">
            <x-label for="provider_imap_port" class="text-gray-500">{{ __('IMAP SERVER PORT') }}</x-label>
            <x-input type="text" name="provider_imap_port" value="{{ old('provider_imap_port') ?? auth()->user()->provider_imap_port }}" required autofocus
                autocomplete="provider_imap_port"
                class="provider-imap-srv" />
            </div>

            <div class="space-y-1">
                <x-label for="provider_imap_ssl" class="text-gray-500">{{ __('IMAP SERVER SSL') }}</x-label>
                <x-input type="text" name="provider_imap_ssl" value="{{ old('provider_imap_ssl') ?? auth()->user()->provider_imap_ssl }}" required autofocus
                    autocomplete="provider_imap_ssl"
                    class="provider-imap-srv" />
            </div>

            <div class="space-y-1">
                <x-label for="provider_smtp_srv" class="text-gray-500">{{ __('SMTP SERVER') }}</x-label>
                <x-input type="text" name="provider_smtp_srv" value="{{ old('provider_smtp_srv') ?? auth()->user()->provider_smtp_srv }}" required autofocus
                    autocomplete="provider_smtp_srv"
                    class="provider-imap-srv" />
            </div>

            <div class="space-y-1">
            <x-label for="provider_smtp_port" class="text-gray-500">{{ __('SMTP SERVER PORT') }}</x-label>
            <x-input type="text" name="provider_smtp_port" value="{{ old('provider_smtp_port') ?? auth()->user()->provider_smtp_port }}" required autofocus
                autocomplete="provider_smtp_port"
                class="provider-imap-srv" />
            </div>

            <div class="space-y-1">
                <x-label for="provider_smtp_ssl" class="text-gray-500">{{ __('SMTP SERVER SSL') }}</x-label>
                <x-input type="text" name="provider_smtp_ssl" value="{{ old('provider_smtp_ssl') ?? auth()->user()->provider_smtp_ssl }}" required autofocus
                    autocomplete="provider_smtp_ssl"
                    class="provider-imap-srv" />
            </div>

            <div class="flex justify-end pt-4">
                <x-button type="submit"
                    class="recovery-btn hover:bg-blue-600">
                    {{ __('Update') }}
                </x-button>
            </div>
      </form>
    </div>
</div>
