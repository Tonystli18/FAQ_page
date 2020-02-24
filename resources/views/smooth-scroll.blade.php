<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <title>Smooth Scrolling Demo</title>
</head>

<body>
    <div id="app" class="p-8">
        <h1 class="text-2xl font-bold">Smooth Scroll</h1>
        <scroll-link href="#categories" class="text-blue-500">Go To Testimonials</scroll-link>
        <div style="height: 2000px"></div>

        <!-- The target section to scroll down to if you click above scroll-link -->
        <div id="categories">
            <h2 class="font-bold mb-6">Testimonials</h2>
            <div class="flex">
                <div class="w-1/3 h-48 bg-gray-200 p-4">
                    <scroll-link href="#app" class="text-blue-500">Go Back Up</scroll-link>
                </div>
                <div class="w-1/3 h-48 bg-gray-400 p-4">Item</div>
                <div class="w-1/3 h-48 bg-gray-200 p-4">Item</div>
            </div>
        </div>
    </div>
</body>

</html>