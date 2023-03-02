<nav class="navbar navbar-expand-lg navBackground" id="navDark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('indexAnnunci') }}"> Shop online </a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('register') }}"> Registrati </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('login') }}"> Accedi </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('about') }}"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" onclick="changeTheme()"> Change-Theme </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href=""> Benvenuto {{ Auth::user()->name }} </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('upload') }}"> carica un annuncio </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" href="{{ route('about') }}"> About </a>
                    </li>
                    <a class=" btn btn-light mx-1 px-2 my-1" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout </a>
                    <form id='logout-form' action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <li class="nav-item">
                        <a class="btn btn-light mx-1 px-2 my-1" onclick="changeTheme()"> Change-Theme </a>
                    </li>
                @endguest
            </ul>
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid p-0 mx-1">
                    <form class="d-flex" role="search" action="{{ route('search') }}" method="get">
                        <input class="form-control me-2" type="search" placeholder="Ricerca parola chiave" name = "query">
                        <button class="btn btn-secondary" type="submit">Search</button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</nav>
