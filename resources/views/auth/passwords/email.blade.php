<x-master>
  <div class="container mx-auto flex justify-center">
    <x-panel>
      <x-slot name="heading">{{ __('Reset Password') }}</x-slot>

      <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-6">
          <label
            class="block mb-2 font-bold text-xs text-gray-700"
            for="email"
          >
            {{ __('Email') }}
          </label>

          <input class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('email') border border-red-500 @enderror"
            type="email"
            name="email"
            id="email"
            value="{{ old('email') }}"
            required
            autofocus
            autocomplete="email"
          >

          @error('email')
            <span class="text-red-500 text-sm mt-1" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="mb-6">
          <button
            type="submit"
            class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500"
          >
            {{ __('Send Reset Password Link') }}
          </button>
        </div>

        @if (session('status'))
          <div class="text-sm text-gray-800" role="alert">
            {{ session('status') }}
          </div>
        @endif
      </form>
    </x-panel>
  </div>
</x-master>