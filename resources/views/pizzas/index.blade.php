@extends('layouts.app')

@section('content')

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h2>PIZZA LIST</h2>
            <!--any image or icon will go here-->
        </div>

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <!-- <div class="flex items-center"> -->
                        <div class="wrapper pizza-index">
                            <h1>Pizza Orders</h1>
                            @foreach ($pizzas as $pizz)
                                <div class="pizza-icon">
                                    <!-- <img src="/images/pizza.png" alt="pizza icon"> -->
                                    <h4><a href="/pizzas/{{ $pizz->id }}">{{ $pizz->name }} </a></h4>
                                </div>
                                
                            @endforeach
                        </div>
                       

                        <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div> -->
                    <!-- </div> -->
                </div>



            </div>
        </div>

    </div>
</div>

@endsection