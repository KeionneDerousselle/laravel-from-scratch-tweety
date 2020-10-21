<h2 class="font-bold text-xl mb-4">Following</h2>
<ul>
  @foreach (auth()->user()->following as $user)
  <li class="mb-4">
    <div class="flex items-center">
      <img 
        src="{{ $user->avatar }}" 
        alt=""
        class="rounded-full mr-2">
      <span class="text-sm">{{ $user->name }}</span>
    </div>
  </li>
  @endforeach
</ul>