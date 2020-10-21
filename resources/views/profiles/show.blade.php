<x-app>
  <header class="mb-6">
    <div class="relative">
      <img 
        src="/images/default-profile-banner.jpg" 
        alt="Profile Banner"
        class="mb-2">

      <img 
        src="{{ $user->avatar(100, 100) }}"
        alt="Avatar Image"
        class="rounded-full absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
        style="width:100px; left: 50%;">
    </div>
    
      <div class="flex justify-between items-center mb-6">
        <div>
          <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
          <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div>
          <a
            href=""
            class="rounded-full border border-gray-400 py-2 px-4 bg-white mr-2 text-sm">
            Edit Profile
          </a>
          <a
            href=""
            class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">
            Follow Me
          </a>
        </div>
      </div>

      <p class="text-sm">
        The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
        and white rabbit or hare who is famous for his flippant, insouciant personality.
        He is also characterized by a Brooklyn accent, his portrayal as a trickster,
        and his catch phrase "Eh...What's up, doc?"
      </p>
  </header>

  @include('_timeline', [
    'tweets' => $user->tweets
  ])
</x-app>
