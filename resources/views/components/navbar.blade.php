<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}"><i class="fas fa-lightbulb me-2"></i>Presto.it</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item" href="{{ route('byCategory', ['category' => $category]) }}">
                                {{ $category->name }}
                            </a>
                        </li>
                        @if (!$loop->last)
                        <li><hr class="dropdown-divider"></li>
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
                        <li>
                            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit()">Logout</a>
                            <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">@csrf</form>
                        </li>
                        <li><a href="{{route('create.article')}}" class="dropdown-item">Crea un articolo</a></li> 
                        @if (Auth::user()->is_revisor)
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('revisor.index') }}">
                                In revisione
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
                    </ul>
                </li>
                @endauth
            </ul>
            
            <form class="d-flex mt-3 mt-lg-0" role="search" action="{{route('article.search')}}" method="GET" style="min-width: 300px;">
                <div class="input-group">
                    <input type="search" name="query" class="form-control custom-search" placeholder="Cerca un articolo..." aria-label="search">
                    <button type="submit" class="btn btn-outline-success fw-bold d-flex align-items-center">
                        Cerca
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search ms-2" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</nav>