@extends('layouts.app')

@section('content')
 <div class="lg:flex lg:justify-between">
   <!-- Sidebar -->
   <div class="lg:w-32">
     @include('_sidebar-links')
   </div>

   <!-- Main Content -->
   <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
      @yield('main')
   </div>

   <!-- Friends -->
   <div class="lg:w-1/6 bg-gray-100 rounded-20 p-4">
     @include('_following-list')
   </div>
 </div>
@endsection
