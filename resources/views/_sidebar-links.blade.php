<ul>
  <li><a class="font-bold text-lg mb-4 block" href="{{ route('tweets.index') }}">Home</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="/explore">Explore</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="#">Notifications</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="#">Messages</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="#">Bookmarks</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="#">Lists</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="{{ auth()->user()->profileLink() }}">Profile</a></li>
  <li><a class="font-bold text-lg mb-4 block" href="#">More</a></li>
</ul>