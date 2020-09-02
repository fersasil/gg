<!-- Two -->
<section id="two" class="wrapper style2 special">
    <div class="container">
        <header class="major">
            <h2>{{ $title }}</h2>
            <p>{{ $subtitle }}</p>
        </header>
        <div class="row 150%">
            @foreach ($cards as $card)
                <div class="6u 12u$(xsmall)">
                    <div class="image fit captioned">
                        <img src="{{ asset($card["url"]) }}" alt="" />
                        <h3>{{ $card["text"] }}</h3>
                    </div>
                </div>

            @endforeach
        </div>
        <ul class="actions">
            @foreach ($buttons as $button)
            <li><a href="{{ $button['url'] }}" class="button big {{ $button['special'] ? 'special' : '' }}">{{ $button['text'] }}</a></li>   
            @endforeach
        </ul>
    </div>
</section>
