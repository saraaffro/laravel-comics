<header>
    <div class="container">
        <div class="logo-container">
            <img src="{{asset('img/dc-logo.png')}}" alt="logo">
        </div>
        <ul>
            @foreach($links as $link)
            <li><a class="{{ $link['status'] ? 'active' : '' }}" href="#">{{$link["text"]}}</a></li>
            @endforeach
            <input type="text" placeholder="Search"><i class="fa-solid fa-magnifying-glass"></i>
        </ul>
    </div>
</header>

<div class="jumbotron">
</div>

