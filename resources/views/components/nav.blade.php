<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container-fluid">

        <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('home') }}">
                <img src="https://img.icons8.com/ios-filled/50/near-me.png" height="35" alt="POI Logo"
                    loading="lazy" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ciao , {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('poi.create') }}">Crea P.O.I.</a></li>
                            <li><a class="dropdown-item" href="{{route('poi.index')}}">Tutti i P.O.I.</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.destroy') }}"
                                    onclick="event.preventDefault();
                                document.getElementById('form-destroy').submit();">Cancella utente</a>
                            </li>
                            <form action="{{ route('user.destroy') }}" method="POST" id="form-destroy" class="d-none">
                                @csrf
                                @method('delete')
                            </form>
                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form action="{{ route('logout') }}" id="logout-form" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="d-flex align-items-center">

            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>

        </div>
    </div>
    </div>
</nav>
