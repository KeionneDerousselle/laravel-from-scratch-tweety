<x-master>
 <div class="lg:flex lg:justify-between">
  @auth
    <!-- Sidebar -->
    <div class="lg:w-32">
      @include('_sidebar-links')
    </div>
   @endauth
   <!-- Main Content -->
   <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
      {{ $slot }}
   </div>

   @auth
    <!-- Friends -->
    <div class="lg:w-1/6 bg-gray-100 rounded-20 p-4">
      @include('_following-list')
    </div>
   @endauth
 </div>
</x-master>
