<x-guest-layout>
  <x-auth-session-status class="m-4 p-2 text-center" :status="session('status')" />
  <div class="flex items-center w-full">
    <div class="card-container">
      <x-auth-signup-background :imagesrc="asset('signup_bg.svg')" :responsivesrc="asset('signup.svg')" />
      <div class="container__items">
        <a href="/" class="flex items-center justify-center">
            <x-application-logo class="application-logo" />
        </a>
        <x-auth-sign-with :to="url('login/google')" :title="'Sign in with Google'" class="sign-with">
          <svg class="w-6 h-6" viewBox="0 0 40 40">
            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#FFC107"/>
            <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z" fill="#FF3D00"/>
            <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z" fill="#4CAF50"/>
            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#1976D2"/>
          </svg>
        </x-auth-sign-with>
        <x-auth-sign-with :to="url('login/microsoft')" :title="'Sign in with Google'" class="sign-with">
          <svg class="w-6 h-6" viewBox="0 0 291.346 291.346">
            <path fill="#26A6D1" d="M117.547,266.156L0,249.141v-94.296h117.547V266.156z"/>
            <path fill="#3DB39E" d="M291.346,136.51H136.31l0.055-114.06L291.346,0.009V136.51z"/>
            <path fill="#F4B459" d="M291.346,291.337l-155.091-22.459l0.182-114.015h154.909V291.337z"/>
            <path fill="#E2574C" d="M117.547,136.51H0V42.205l117.547-17.024V136.51z"/>
          </svg>
        </x-auth-sign-with>
        <x-auth-sign-with :to="url('login/yahoo')" :title="'Sign in with Yahoo'" class="sign-with">
          <svg class="w-6 h-6" viewBox="0 0 291.319 291.319">
            <path fill="#720E9E" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z"/>
            <path fill="#FFFFFF" d="M212.353,114.98l0.155-0.027l4.825-5.371l-0.237-0.018l0.51-0.801h-67.595l2.604,9.249h18.444l-31.044,28.722c-6.336-9.24-21.184-30.479-31.544-46.411h19.254v-6.555l0.264-1.884l-0.264-0.036v-0.765H54.631v9.24H77.49c8.876,7.328,47.358,54.049,48.76,58.51c0.564,4.179,1.366,28.841-0.291,30.698c-1.994,2.868-22.814,1.32-26.483,1.593l-0.137,9.058c6.7,0.2,26.801-0.009,33.584-0.009c13.364,0,36.77-0.346,40.065-0.082l0.41-8.576l-26.901-0.401c-0.564-3.887-1.183-28.422-0.619-31.098c2.54-7.765,43.816-39.902,48.059-41.112l3.997-0.901h12.472C210.405,118.002,212.353,114.98,212.353,114.98z M202.266,179.079l11.689,0.892l13.628-49.979c-2.276-0.082-22.95-1.93-25.636-2.431L202.266,179.079z M200.245,187.091l0.064,12.208l5.917,0.492l6.391,0.446l1.875-11.944l-6.737-0.31C207.756,187.983,200.245,187.091,200.245,187.091z"/>
          </svg>
        </x-auth-sign-with>
        <div class="flex-center-between mt-4">
          <span class="login-dash"></span>
          <span class="login-caption">or login with email</span>
          <span class="login-dash"></span>
        </div>
        <x-auth-form id="login-form" method="POST" action="{{ route('login') }}" name="Login">
          <div class="mt-4">
              <x-label class="label-style" for="email">Email Address</x-label>
              <x-auth-input id="email" type="email" name="email"
                value="{{old('email')}}" required autofocus />
          </div>
          @error('email')
          <div class="mt-4">
            {{ $errors->first('email') }}
          </div>
          @enderror
          <div class="mt-4" x-data="{ show: true }" x-cloak>
            <div class="flex justify-between">
                <x-label class="label-style" for="password">Password</x-label>
                @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="forget-password">Forget Password?</a>
                @endif
            </div>
            <div class="relative">
              <x-auth-input id="password" ::type="show ? 'password' : 'text'" name="password"
              placeholder="" required autocomplete="current-password" />
              <x-auth-password-icon class="password-icon" />
            </div>
          </div>
          @error('password')
          <div class="mt-4">
            {{ $errors->first('password') }}
          </div>
          @enderror
          <div class="flex justify-between">
            <x-label class="remember-me">
             <x-auth-input id="remember" class="leading-loose text-pink-600"
                    type="checkbox"
                    name="remember" />
             <span class="remember--me__title"> Remember Me </span>
            </x-label>
          </div>
        </x-auth-form>

        <x-auth-change-page class="flex-center-between mt-4" :route="route('register')" :title="'sign up'" />
      </div>
    </div>
  </div>
</x-guest-layout>
