<x-app>
  <form method="POST" action="{{ route('profiles.update', $user) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-6">
      <label
        class="block mb-2 font-bold text-xs text-gray-700"
        for="username"
      >
          {{ __('Username') }}
      </label>

      <input 
        class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('username') border border-red-500 @enderror"
        type="text"
        name="username"
        id="username"
        value="{{ $user->username }}"
        required
      >

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
        for="name"
      >
          {{ __('Name') }}
      </label>

      <input 
        class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('name') border border-red-500 @enderror"
        type="text"
        name="name"
        id="name"
        value="{{ $user->name }}"
        required
      >

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
        class="block mb-2 font-bold text-xs text-gray-700"
        for="avatar"
      >
        {{ __('Avatar') }}
      </label>

      <div class="flex">
        <input
          class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('avatar') border border-red-500 @enderror"
          type="file"
          name="avatar"
          id="avatar"
          accept="image/*"
        >

        <img
          src="{{ $user->getAvatarLink() }}"
          alt="your avatar"
          width="40"
        >
      </div>

      @error('avatar')
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
        for="email"
      >
        {{ __('Email') }}
      </label>

      <input
        class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('email') border border-red-500 @enderror"
        type="email"
        name="email"
        id="email"
        value="{{ $user->email }}"
        required
      >

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
      >

      @error('password')
        <span class="text-red-500 text-sm mt-1" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="mb-6">
      <label
        class="block mb-2 font-bold text-xs text-gray-700"
        for="password_confirmation"
      >
        {{ __('Password Confirmation') }}
      </label>

      <input
        class="rounded border border-gray-400 hover:border-gray-500 focus:outline-none focus:border-gray-600 p-2 w-full @error('password_confirmation') border border-red-500 @enderror"
        type="password"
        name="password_confirmation"
        id="password_confirmation"
      >

      @error('password_confirmation')
        <span class="text-red-500 text-sm mt-1" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="mb-6">
        <button 
          type="submit"
          class="bg-blue-400 text-white rounded-lg py-2 px-4 hover:bg-blue-500 mr-4"
        >
          {{ __('Submit') }}
        </button>

        <a href="{{ route('profiles.show', $user) }}" class="hover:underline hover:text-blue-500">Cancel</a>
    </div>
  </form>
</x-app>