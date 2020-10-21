<div class="flex p-4 border-b border-b-gray-400">
  <div class="mr-2 flex-shrink-0">
    <img 
      src="{{ $tweet->user->avatar }}" 
      alt=""
      class="rounded-full mr-2">
  </div>

  <div>
    <h3 class="font-bold mb-4">
      {{ $tweet->user->name }}
    </h3>
    <p class="text-sm">
      {{ $tweet->body }}
    </p>
  </div>
</div>