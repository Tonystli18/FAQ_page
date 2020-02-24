<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Context Menu Demo</title>
</head>

<body>
    <div id="app" class="flex flex-col items-center p-8">
        <h1 class="text-2xl font-bold mb-8">Context Menu</h1>
        <div>
            <div class="bg-gray-100 w-64 h-64 flex flex-col items-center justify-center">
                <dropdown>
                    <template v-slot:trigger>
                        <button>...</button>
                    </template>
                    <li class="dropdown-menu-item">
                        <a class="pl-2 pr-8 block leading-loose text-xs hover:bg-green-400" href="#">Edit</a>
                    </li>
                    <li>
                        <a class="pl-2 pr-8 block leading-loose text-xs hover:bg-green-400" href="#">Delete</a>
                    </li>
                    <li>
                        <a class="pl-2 pr-8 block leading-loose text-xs hover:bg-green-400" href="#">Report</a>
                    </li>
                </dropdown>
            </div>
        </div>
        <hr>
        <div>
            <dropdown classes="w-full">
                <template v-slot:trigger>
                    <button>For more options</button>
                </template>
                <li class="dropdown-menu-item">
                    <a class="pl-2 pr-8 block leading-loose text-xs hover:bg-green-400" href="#">Edit</a>
                </li>
                <li>
                    <a class="pl-2 pr-8 block leading-loose text-xs hover:bg-green-400" href="#">Delete</a>
                </li>
                <li>
                    <a class="pl-2 pr-8 block leading-loose text-xs hover:bg-green-400" href="#">Report</a>
                </li>
            </dropdown>
        </div>
    </div>
</body>

</html>