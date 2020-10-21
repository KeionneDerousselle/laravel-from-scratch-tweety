<x-master>
  <div class="container mx-auto flex justify-center">
    <x-panel>
      <x-slot name="heading">{{ __('Confirm Password' )}}</x-slot>
        {{ __('Please confirm your password before continuing.') }}

        <form method="POST" action="{{ route('password.confirm') }}">
          @csrf

          <div class="mb-6">
            <label
              class="block mb-2 font-bold text-xs text-gray-700"
              for="password"
            >
              {{ __('Password') }}
            </label>

            <input 
              class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('password') border border-red-500 @enderror"
              type="password"
              name="password"
              id="password"
              required
              autocomplete="current-password"
            >
            @error('password')
              <span class="text-red-500 text-sm mt-1" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

          <div class="mb-6">
            <button
              type="submit"
              class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
              {{ __('Confirm Password') }}
            </button>
          </div>

          <div class="flex flex-col md:items-center md:flex-row md:justify-between">
            <button
              class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500 mb-6 md:mb-0 mr-0 md:mr-6"
              type="submit">
              {{ __('Submit') }}
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