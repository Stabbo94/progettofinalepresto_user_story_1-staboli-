<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fas fa-lightbulb me-2"></i>Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                    aria-expanded="false">
                    Categorie
                </a>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li>
                        <a class="dropdown-item" 
                        href="{{ route('byCategory', ['category' => $category]) }}">{{ $category->name }}</a>
                    </li>
                    @if (!$loop->last)
                    <hr class="dropdown-divider">
                    @endif
                    @endforeach
                </ul>
            </li>
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Ciao {{Auth::user()->name}}!
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()">Logout</a>
                        <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
                    </li>
                    <li>
                        <a href="{{route('create.article')}}" class="dropdown-item">Crea un articolo</a>
                    </li> 
                    @if (Auth::user()->is_revisor)
                    <li>
                        <a class="dropdown-item d-flex justify-content-between align-items-center" 
                        href="{{ route('revisor.index') }}">
                        Zona revisore
                        <span class="badge rounded-pill bg-danger">
                            {{ \App\Models\Article::toBeRevisedCount() }}
                        </span>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @else
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ciao Nuovo Ospite!
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                <li><hr class="dropdown-divider"></li>
            </ul>
        </li>
        @endauth
    </ul>
</li>
</ul>
</div>
</div>
</nav>