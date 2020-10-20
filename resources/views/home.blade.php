@extends('layouts.app')

@section('content')
 <div class="lg:flex lg:justify-between">
   <!-- Sidebar -->
   <div class="lg:w-32">
     @include('_sidebar-links')
   </div>

   <!-- Main Content -->
   <div class="lg:flex-1 lg:mx-10" style="max-width: 700px;">
     <!-- New Tweet Box -->
    <div class="mb-8">
      @include('_new-tweet-box')
    </div>

     <!-- Timeline -->
    <div>
      @include('_timeline')
    </div>
   </div>

   <!-- Friends -->
   <div class="lg:w-1/6 bg-gray-100 rounded-lg p-4">
     @include('_friends-list')
   </div>
 </div>
@endsection
