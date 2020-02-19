@extends('layout')

@section('content')

<section class="">
    <div id="app" class="container mx-auto">
        <div class="w-3/5 m-auto generic-content">
            <header class="mb-10 text-center">
                <h1 class="text-3xl mb-2">FAQ</h1>
                <p> It's Ok, from time to time, we all have questions.</p>
            </header>

            @foreach ($questions as $question)
            <question :question="{{ json_encode($question) }}"></question>

            @endforeach
        </div>
    </div>
</section>

@stop