@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="border-solid border-2 border-purple-600 w-4/12 bg-purple-100 p-6 rounded-lg">
      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="mb-4">
          <label for="name" class="sr-only">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

          @error('name')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="username" class="sr-only">Username</label>
          <input type="text" name="username" id="username" placeholder="Enter your username..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" value="{{ old('username') }}">

          @error('username')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="email" class="sr-only">Email</label>
          <input type="text" name="email" id="email" placeholder="Enter your email..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

          @error('email')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" placeholder="Enter your password..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

          @error('password')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-4">
          <label for="password_confirmation" class="sr-only">Repeat your password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password..." class="border-double border-4 border-purple-600 w-full p-4 rounded-lg @error('repeat password') border-red-500 @enderror" value="">

          @error('repeat password')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div>
          <button type="submit" class="bg-purple-600 hover:bg-purple-900 text-white px-4 py-3 rounded font-medium w-full">Register</button>
        </div>
      </form>
    </div>
  </div>
@endsection