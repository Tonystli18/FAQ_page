<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Modal using Vue component</title>

    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body class="p-10">
    <div id="app" class="text-center">
        <h1 class="text-2xl font-bold mb-8">Modal</h1>

        <p>
            <a href="#cancel-modal" class=" text-blue-500 underline">Open Modal</a>
        </p>


        <modal name="cancel-modal">
            <h1 class=" font-bold text-xl mb-2">Leaving So Soon</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim vel dignissimos illo veniam
                quos at voluptatem earum quo?
            </p>
            <template v-slot:footer>
                <button @click="$modal.hide('cancel-modal')" class="bg-gray-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2">Cancel</button>
                <a href="#confirm-cancel-modal" class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2">Confirm Cancellation</a>
            </template>
        </modal>


        <modal name="confirm-cancel-modal">
            <h1 class=" font-bold text-xl mb-2">Please Confirm Your Cancellation</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut enim vel dignissimos illo veniam
                quos at voluptatem earum quo?
            </p>
            <template v-slot:footer>
                <a href="#" class="bg-gray-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2">Cancel</a>
                <a href="#" class="bg-blue-500 py-2 px-4 rounded-lg text-white hover:bg-gray-600 mr-2">Yes</a>
            </template>
        </modal>
    </div>
</body>

</html>