@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12">
      <div class="p-6">
        <h1 class="text-4xl font-bold mb-2">{{ $user->name }}</h1>
        <p class="text-lg">Stats:</p>
        <p class="text-lg">Posted: {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} <br> Received: {{ $user->receivedLikes->count() }} likes</p>
      </div>
      <div class="bg-white p-6 rounded-lg">
        @if ($posts->count())
          @foreach ($posts as $post)
            <x-post :post="$post"/>
          @endforeach
          {{ $posts->links() }}
        @else
          <p>{{ $user->name }} does not have any posts</p>
        @endif
      </div>   
    </div>
  </div>
@endsection