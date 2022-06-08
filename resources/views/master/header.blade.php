<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">{{$Title}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach($nav as $array)

                <li class="nav-item @if($array['title']===$active)active @endif">
                    <a class="nav-link" href="{{url($array['href'])}}">{{$array['title']}}</a>
                </li>

            @endforeach
                @guest
                    <a class="nav-link" href="{{url("/login")}}">Login</a>
                    <a class="nav-link" href="{{url("/register")}}">Register</a>
                @endguest
        </ul>
        <form action="{{ url('/players') }}" method="GET">
            <input class="form-control mr-sm-2" type="text" name="search" placeholder="search" aria-label="Search">
            <button class="btn-primary" type="submit">Search</button>
        </form>
    </div>
</nav>
