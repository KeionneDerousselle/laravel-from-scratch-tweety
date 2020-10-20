<h2 class="font-bold text-xl mb-4">Friends</h2>
<ul>
  @foreach (range(1, 8) as $index)
  <li class="mb-4">
    <div class="flex items-center">
      <img 
        src="https://avatars.dicebear.com/api/avataaars/john.svg?width=40&height=40" 
        alt=""
        class="rounded-full mr-2">
      <span class="text-sm">John Doe</span>
    </div>
  </li>
  @endforeach
</ul>