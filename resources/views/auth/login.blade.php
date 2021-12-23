@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="border-solid border-2 border-purple-600 w-4/12 bg-purple-100 p-6 rounded-lg">
      @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
          {{ session('status') }}
        </div>
      @endif

      <form action="{{ route('login') }}" method="post">
        @csrf
        
        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter your email..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

          @error('email')
            <div class="text-red-500 font-semibold mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

          @error('password')
            <div class="text-red-500 font-semibold mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-4">
          <div class="flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2 ">
            <label for="remember">Remember me</label>
          </div>
        </div>

        <div>
          <button type="submit" class="bg-purple-600 hover:bg-purple-900 text-white px-4 py-3 rounded font-medium w-full">Login</button>
        </div>
      </form>
    </div>
  </div>
@endsection