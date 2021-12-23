<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Slakk</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/caf8a16577.js" crossorigin="anonymous"></script>
  </head>
  <body class="bg-gray-100">
    <nav class="p-6 bg-purple-600 flex justify-between text-purple-100 mb-10 text-2xl font-bold">
      <ul class="flex items-center">
        <li>
          <a href="/" class="p-3 hover:text-green-300"><i class="fab fa-slack"></i></a>
        </li>
        <li>
          <a href="{{ route('dashboard') }}" class="p-3 hover:text-purple-300">Dashboard</a>
        </li>
        <li>
          <a href="{{ route('posts') }}" class="p-3 hover:text-purple-300">Posts</a>
        </li>
      </ul>

      <ul class="flex items-center">
        @auth
          <li>
            <a href="" class="p-3 cursor-default">{{ auth()->user()->name }}</a>
          </li>
          <li>
            <form action="{{ route('logout') }}" method="post" class="p-3 inline">
              @csrf
              <button type="submit" class="text-xl font-semibold hover:text-red-300"><i class="fas fa-sign-out-alt"></i></button>
            </form>
          </li>
        @endauth
          
        @guest
          <li>
            <a href="{{ route('login') }}" class="p-3 hover:text-purple-300">Login</a>
          </li>
          <li>
            <a href="{{ route('register') }}" class="p-3 hover:text-purple-300">Register</a>
          </li>
        @endguest
      </ul>
    </nav>
    @yield('content')
  </body>
</html>