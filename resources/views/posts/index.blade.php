@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg border-solid border-4 border-purple-600">
      @auth
        <form action="{{ route('posts') }}" method="post" class="mb-4">
          @csrf
          <div class="mb-4">
            <label for="body" class="sr-only">Body</label>
            <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
            placeholder="Post something!"></textarea>

            @error('body')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="flex justify-center">
            <button type="submit" class="bg-purple-600 hover:bg-purple-900 text-white px-4 py-2 rounded font-medium">Post</button>
          </div>
        </form>
      @endauth

      @if ($posts->count())
        @foreach ($posts as $post)
          <x-post :post="$post" />
        @endforeach

        {{ $posts->links() }}
      @else
        <p class="flex justify-center font-extrabold font-mono text-3xl">There are no posts<i class="text-4xl ml-3 far fa-sad-cry"></i></p>
      @endif
    </div>
  </div>
@endsection