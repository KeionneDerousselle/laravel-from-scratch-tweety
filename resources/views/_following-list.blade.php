<h2 class="font-bold text-xl mb-4">Following</h2>
<ul>
  @forelse (auth()->user()->following as $user)
  <li class="mb-4">
    <a href="{{ $user->profileLink()}}" class="flex items-center text-sm">
      <img 
        src="{{ $user->getAvatarLink() }}" 
        alt="Profile Image"
        class="rounded-full mr-2">
      <span>{{ $user->name }}</span>
    </a>
  </li>
  @empty
    <span class="block p-4"> You're not following anyone yet!</span>
  @endforelse
</ul>