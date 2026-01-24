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
                <h1 class="display-4 mb-5">Presto.it</h1>
                
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-md-6 col-lg-4">
                        @auth
                        <a class="btn btn-dark w-100 fw-bolder d-flex align-items-center justify-content-center" href="{{route('create.article')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-bag-plus me-2" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5"/>
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                            </svg>
                            {{ __('ui.createArticle') }}
                        </a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid mb-5">
        <div class="row justify-content-center align-items-center text-center py-5">
            <div class="col-12">
                <h2 class="display-1">{{ __('ui.featuredArticles') }}</h2>
            </div>
        </div>
        
        <div class="container">
            <div class="row g-4 my-3">
                @forelse ($articles as $article)
                <div class="col-12 col-md-6 col-lg-3 d-flex justify-content-center">
                    <x-card :article="$article"/>
                </div>
                @empty
                <div class="col-12 text-center">
                    <h3 class="mt-5">{{ __('ui.noArticles') }}</h3>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</x-layout>