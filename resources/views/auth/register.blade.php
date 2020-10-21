<x-master>
  <div class="container mx-auto flex justify-center">
    <x-panel>
      <x-slot name="heading">Register</x-slot>

      <form method="POST" action="{{ route('register' )}}">
        @csrf

        <div class="mb-6">
          <label
            class="block mb-2 font-bold text-xs text-gray-700"
            for="username">
            {{ __('Username') }}
          </label>

          <input 
            type="text"
            name="username"
            id="username"
            class="border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('username') border border-red-500 @enderror"
            autocomplete="username"
            autofocus
            value="{{ old('username')}}"
            required>
          @error('username')
            <span
              class="text-red-500 text-sm mt-1"
              role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        
        <div class="mb-6">
          <label
            class="block mb-2 font-bold text-xs text-gray-700"
            for="name">
            {{ __('Name') }}
          </label>

          <input 
            type="text"
            name="name"
            id="name"
            class="border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('name') border border-red-500 @enderror"
            autocomplete="name"
            autofocus
            value="{{ old('name')}}"
            required>
          @error('name')
            <span
              class="text-red-500 text-sm mt-1"
              role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="mb-6">
          <label
            for="email"
            class="block mb-2 font-bold text-xs text-gray-700">
            {{ __('Email Address') }}
          </label>
          <input
            id="email"
            type="email"
            class="border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('email') border border-red-500 @enderror"
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
            class="border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('password') border border-red-500 @enderror"
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
          <label
            for="password_confirmation"
            class="block mb-2 font-bold text-xs text-gray-700">
            {{ __('Password Confirmation') }}
          </label>
          <input
            id="password_confirmation"
            type="password"
            class="border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('password_confirmation') border border-red-500 @enderror"
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
            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
            {{ __('Register') }}
          </button>
        </div>
      </form>
    </x-panel>
  </div>
</x-master>
