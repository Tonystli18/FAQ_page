<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>An Modal Example</title>
</head>

<body>
    <a href="#join-modal">Join</a>

    @component('modal', ['name' => 'join-modal'])
    <h1>Pick up a plan</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.
    </p>
    @endcomponent

</body>

</html>