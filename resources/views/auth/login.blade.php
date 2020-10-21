<x-master>
  <div class="container mx-auto flex justify-center">
    <x-panel>
      <x-slot name="heading">{{ __('Login') }}</x-slot>
      <form method="POST" action="{{ route('login') }}">
          @csrf
  
          <div class="mb-6">
              <label
                for="email"
                class="block mb-2 font-bold text-xs text-gray-700">
                {{ __('Email Address') }}
              </label>
              <input
                id="email"
                type="email"
                class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('email') border border-red-500 @enderror"
                name="email"
                value="{{ old('email') }}"
                required
                autocomplete="email"
                autofocus>
              @error('email')
                <span
                  class="text-red-500 text-sm mt-1"
                  role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
  
          <div class="mb-6">
              <label
                for="password"
                class="block mb-2 font-bold text-xs text-gray-700">
                {{ __('Password') }}
              </label>
              <input
                id="password"
                type="password"
                class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('password') border border-red-500 @enderror"
                name="password"
                required
                autocomplete="current-password">
              @error('password')
                <span class="text-red-500 text-sm mt-1" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
          </div>
  
          <div class="mb-6">
            <div>
              <input
                class="mr-1"
                type="checkbox"
                id="remember" {{ old('remember') ? 'checked' : '' }}
              >
              <label 
                for="remember" 
                class="text-xs text-gray-700 font-bold">
                Remember Me
              </label>
            </div>
            @error('remember')
              <span class="text-red-500 text-sm mt-1" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
  
          <div class="flex flex-col md:items-center md:flex-row md:justify-between">
            <button
              class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500 mb-6 md:mb-0 mr-0 md:mr-6"
              type="submit">
              {{ __('Login') }}
            </button>
  
            <a
              href="{{ route('password.request') }}"
              class="text-xs text-gray-700 hover:text-blue-600">
              {{ __('Forgot Your Password?') }}
            </a>
          </div>
      </form>
    </x-panel>
  </div>
</x-master>
