<header>
    <div class="container">
        <div class="logo-container">
            <img src="{{asset('img/dc-logo.png')}}" alt="logo">
        </div>
        <ul>
            @foreach($links as $link)
            <li><a href="#">{{$link["text"]}}</a></li>
            @endforeach
        </ul>
    </div>
</header>
