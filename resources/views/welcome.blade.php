@extends('layouts.layout')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">


    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <img src="/images/pizza-house.png" alt="pizza house logo">
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="text-center">
            <p class="message"> {{ session('message') }} </p>
                <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
            </div>
        </div>

       
    </div>
</div>

@endsection