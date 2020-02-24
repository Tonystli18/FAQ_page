<link rel="stylesheet" href="{{ asset('/css/modal.css') }}"/>
<div id="{{$name}}" class="overlay">

<a href="#" class="cancel"></a>

<div class="modal">
    {{ $slot }}

    <a href="#" class="close">&times;</a>
</div>
</div>