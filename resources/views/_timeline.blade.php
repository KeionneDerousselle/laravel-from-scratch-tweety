<div class="border border-gray-300 rounded-20">
  @forelse ($tweets as $tweet)
    @include('_tweet')
  @empty
    <span class="block p-4">Publish your first tweet or follow someone to get started!</span>
  @endforelse
</div>