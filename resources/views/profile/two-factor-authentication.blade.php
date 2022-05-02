<div class="two-factor-responsive">
  {{-- <h2 class="mb-2 font-semibold text-blue-400 uppercase">Two factor authentication</h2> --}}
  <div class="border-gray-rounded">
    @if (auth()->user()->two_factor_confirmed)
      <h2 class="text-blue-uppercase">Two factor codes</h2>
      {{-- @if (auth()->user()->two_factor_confirmed) --}}
      <div>
          <a href="{{ url('/user/two-factor-qr-code') }}"
              class="recovery-qr-code">
              {{ __('Two factor QR code') }}
          </a>
      </div>
      <div>
          <a href="{{ url('/user/two-factor-recovery-codes') }}"
              class="recovery-qr-code">
              {{ __('Two factor recovery codes') }}
          </a>
      </div>
    @endif
    <h2 class="text-blue-uppercase">Two factor authentication</h2>
    <div class="factor-confirmed">
        @if (auth()->user()->two_factor_confirmed)

          @if (in_array(session('status'), ['two-factor-authentication-enabled', 'recovery-codes-generated']))
          <div class="text-sm-gray-500">
              {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application.') }}
          </div>

          <div>
              {!! auth()->user()->twoFactorQrCodeSvg() !!}
          </div>
          @endif

          <div class="text-sm-gray-500">
              {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
          </div>

          <form method="POST" action="{{ url('user/two-factor-recovery-codes') }}">
              @csrf

              <div class="flex-end-pt4">
                <x-button class="recovery-btn hover:bg-blue-600">
                    {{ __('Regenerate Recovery Codes') }}
                </x-button>
            </div>
          </form>

          <form method="POST" action="{{ url('user/two-factor-authentication') }}">
              @csrf
              @method('DELETE')

              <div class="flex-end-pt4">
                <x-button class="recovery-btn hover:bg-blue-600">
                    {{ __('Disable Two-Factor Authentication') }}
                </x-button>
            </div>
          </form>

        <!-- 2FA enabled but not yet confirmed, we show the QRcode and ask for confirmation : -->
        @elseif(auth()->user()->two_factor_secret)
          <p>Validate 2FA by scanning the floowing QRcode and entering the TOTP</p>

          {!! auth()->user()->twoFactorQrCodeSvg() !!}

          <form action="{{route('two-factor.confirm')}}" method="post">
            @csrf

            <x-label for="code" :value="__('Confirm code')" />
            <x-input id="code" class=""
                     type="password"
                     name="code"
                     required/>
            <div class="flex-end-pt4">
              <x-button class="recovery-btn hover:bg-blue-600">
                  {{ __('Validate 2FA') }}
              </x-button>
            </div>
          </form>
        @else
          <form method="POST" action="{{ url('user/two-factor-authentication') }}">
            @csrf

            <div class="flex-end-pt4">
              <x-button class="recovery-btn hover:bg-blue-600">
                  {{ __('Enable Two-Factor Authentication') }}
              </x-button>
            </div>
          </form>
        @endif

    </div>
</div>
