<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
  <div class="mr-2 flex-shrink-0">
    <a href="{{ $tweet->user->profileLink()}}">
      <img 
        src="{{ $tweet->user->getAvatarLink(50, 50) }}" 
        alt="Profile Image"
        class="rounded-full mr-2">
    </a>
  </div>

  <div>
    <h3 class="font-bold mb-4">
      <a href="{{ $tweet->user->profileLink()}}">{{ $tweet->user->name }}</a>
    </h3>
    <p class="text-sm">
      {{ $tweet->body }}
    </p>
  </div>
</div>