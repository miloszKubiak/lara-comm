@extends('layouts.app')

@section('content')
  <div class="flex flex-col justify-center items-center">
    <h1 class="text-4xl font-bold"><i class="fab fa-slack text-green-300"></i> .slakk</h1>
    <br>
    <p class="p-7 text-2xl text-center font-semibold">This application is the best communicator. We have already been trusted by millions of customers! Add posts and tag the ones you like! Have fun :)</p>
    <br>   
  </div>
  <div class="flex justify-around p-7 flex-wrap">
    <div class="flex flex-col justify-center items-center p-5">
      <i class="fab fa-stack-exchange text-9xl text-gray-300"></i>
      <br>
      <p class="font-semibold text-lg">Very Fast</p>
    </div>
    <div class="flex flex-col justify-center items-center p-5">
      <i class="fas fa-users text-9xl text-red-300"></i>
      <br>
      <p class="font-semibold text-lg">Large community</p>
    </div>
    <div class="flex flex-col justify-center items-center p-5">
      <i class="fas fa-eye text-9xl text-blue-300"></i>
      <br>
      <p class="font-semibold text-lg">Beauty UI</p>
    </div>
    <div class="flex flex-col justify-center items-center p-5">
      <i class="fas fa-smile-beam text-9xl text-yellow-300"></i>
      <br>
      <p class="font-semibold text-lg">Satisfied customers</p>
    </div>
  </div>
@endsection