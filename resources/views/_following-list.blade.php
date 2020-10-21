<h2 class="font-bold text-xl mb-4">Following</h2>
<ul>
  @foreach (auth()->user()->following as $user)
  <li class="mb-4">
    <a href="{{ $user->profileLink()}}" class="flex items-center text-sm">
      <img 
        src="{{ $user->avatar() }}" 
        alt="Profile Image"
        class="rounded-full mr-2">
      <span>{{ $user->name }}</span>
    </a>
  </li>
  @endforeach
</ul>