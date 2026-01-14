<x-layout>
    
    <div class="container mt-3">
        @if (session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-100">
            {{ session('errorMessage') }}
        </div>
        @endif
        
        @if (session()->has('message'))
        <div class="alert alert-success text-center shadow rounded w-100">
            {{ session('message') }}
        </div>
        @endif
    </div>
    
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12"> 
                <h1 class="display-4 mb-4">Presto.it</h1>
                
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6 col-lg-4">
                        <form class="d-flex mb-3" role="search" action="{{route('article.search')}}" method="GET">
                            <div class="input-group">
                                <input type="search" name="query" class="form-control" placeholder="Cerca un articolo..." aria-label="search">
                                <button type="submit" class="btn btn-outline-success">
                                    Cerca
                                </button>
                            </div>
                        </form>
                    </div>
                </div> 
                
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        @auth
                        <a class="btn btn-dark w-100 text-center fw-bolder" href="{{route('create.article')}}">
                            Crea un articolo
                        </a>
                        @endauth
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center py-5">
            <div class="col-12">
                <h2 class="display-1">Articoli in evidenza</h2>
            </div>
        </div>
        
        <div class="row justify-content-center align-items-center my-3">
            @forelse ($articles as $article)
            <div class="col-12 col-md-4 p-3">
                <x-card :article="$article"/>
            </div>
            @empty
            <div class="col-12 text-center">
                <h3>Non sono ancora stati creati articoli</h3>
            </div>
            @endforelse
        </div>
    </div>
    
</x-layout>