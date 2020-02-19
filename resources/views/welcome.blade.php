<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Responsive Demo</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body>
        <div class="md:flex md:flex-wrap">
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">1</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">2</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">3</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">4</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">5</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">6</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">7</div>
            </div>
            <div class="md:w-1/2 lg:w-1/4 p-4">
                <div class="box bg-gray-500 p-4">8</div>
            </div>

        </div>
    </body>
</html>
