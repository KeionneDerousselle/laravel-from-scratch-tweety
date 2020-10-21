<x-master>
  <div class="container mx-auto flex justify-center">
    <x-panel>
      <x-slot name="heading">{{__('Reset Password')}}</x-slot>

      <form method="POST" action="{{ route('password.update')}}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-6">
          <label
            class="block mb-2 font-bold text-xs text-gray-700"
            for="email">
            {{__('Email')}}
          </label>

          <input 
            type="email"
            name="email"
            id="email"
            class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('email') border border-red-500 @enderror"
            value="{{ old('email') }}"
            autofocus
            autocomplete="email"
            required>
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
            autocomplete="new-password">
          @error('password')
            <span class="text-red-500 text-sm mt-1" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="mb-6">
          <label
            for="password_confirmation"
            class="block mb-2 font-bold text-xs text-gray-700">
            {{ __('Confirm Password') }}
          </label>
          <input
            id="password_confirmation"
            type="password"
            class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('password_confirmation') border border-red-500 @enderror"
            name="password_confirmation"
            required
            autocomplete="new-password">
          @error('password_confirmation')
            <span class="text-red-500 text-sm mt-1" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div>
          <button
            type="submit"
            class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500">
            {{ __('Reset Password') }}
          </button>
        </div>
      </form>
    </x-panel>
  </div>
</x-master>
