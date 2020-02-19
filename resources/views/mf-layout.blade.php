@extends('layout')

@section('content')

<section class="">
    <div id="app" class="container mx-auto">
        <div class="md:min-h-screen md:flex flex-col bg-gray-600">
            <header class=" bg-blue-400 p-3">
                <h1 class=" text-lg lg:text-3xl">My Demo websit</h1>
            </header>
            <div class="md:flex md:flex-1">
                <aside class="bg-yellow-200 p-3">
                    sidebar
                </aside>
                <main class=" bg-indigo-400 md:flex-1 p-3">
                    <div class="flex flex-wrap">
                        <div class="w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                        <div class="w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                        <div class=" w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                        <div class=" w-1/2 md:w-1/4 p-3">
                            <div class=" bg-gray-500 p-3 md:mb-2">
                                <p>product feature</p>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <footer class="bg-teal-700 text-white p-3">
                Copyright 2020
            </footer>
        </div>
    </div>
</section>

@stop