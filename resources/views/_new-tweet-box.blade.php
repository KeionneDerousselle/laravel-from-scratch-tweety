<div class="border border-blue-400 rounded-lg px-8 py-6">
  <form method="POST" action="{{ route('tweets.store') }}">
    @csrf

    <textarea
      name="body"
      id="body"
      class="w-full focus:outline-none"
      placeholder="What's new?"
      required
      maxlength="255"
    ></textarea>

    @error('body')
      <p class="text-red-500 text-sm mt-1">{{$message}}</p>
    @enderror

    <hr class="my-4">

    <footer class="flex justify-between">
      <img 
        src="{{ auth()->user()->avatar }}" 
        alt="Your Avatar Image"
        class="rounded-full mr-2">
      
      <button 
        type="submit"
        class="bg-blue-500 rounded-lg shadow p-2 text-white">
        Tweet
      </button>
    </footer>
  </form>
</div>