@extends('layout')

@section('content')

<section class="">
    <div id="app" class="container mx-auto">
        <div class="w-3/5 m-auto generic-content">
            <header class="mb-10 text-center">
                <h1 class="text-3xl mb-2">FAQ</h1>
                <p> It's Ok, from time to time, we all have questions.</p>
            </header>

            <accordion :items="{{ $questions}}"></accordion>
            {{-- @foreach ($questions as $question)
            <accordion :title ="{{ json_encode($question->question) }}" :body="{{ json_encode($question->answer) }}"></accordion>
            @endforeach --}}
        </div>
    </div>
</section>

@stop