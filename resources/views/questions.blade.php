<div class="has-columns has-borders has-three">

    @foreach($questions as $question)
        <div class="column-item">
            <div class="heading is-4">
                {{$question->question}}
            
            </div>

            <div class="content faq-content is-6">
                {!! $question->answer !!}
            </div>
        </div>

    @endforeach

</div>