<x-layout>
    
    <div class="container py-5">
        
        <div class="row justify-content-center align-items-center mb-4">
            
            <div class="col-12 text-start">
                
                <h1 class="display-4 fw-bold text-center">{{ __('ui.articleDetail') }}: {{$article->title}}</h1>
                
            </div>
            
        </div>
        
        
        <div class="row justify-content-start py-3">
            
            <div class="col-12 col-md-6 mb-3">
                
                @if ($article->images->count() > 0)
                
                <div id="carouselExample" class="carousel slide">
                    
                    <div class="carousel-inner">
                        
                        @foreach ($article->images as $key => $image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{ $image->getUrl() }}" class="d-block w-100 rounded shadow" 
                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                        </div>
                        @endforeach
                        
                    </div>
                    
                    @if ($article->images->count() > 1)
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        
                        <span class="visually-hidden">Previous</span>
                        
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        
                        <span class="visually-hidden">Next</span>
                        
                    </button>
                    
                    @endif
                    
                </div>
                
                @else
                
                <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente" class="img-fluid rounded shadow">
                
                @endif
                
            </div>
            
            <div class="col-12 col-md-6 text-start ps-md-5">
                
                <h2 class="display-5"><span class="fw-bold">{{ __('ui.title') }}: </span>{{ $article->title }}</h2>
                
                <div class="d-flex flex-column">
                    
                    <h4 class="fw-bold">{{ __('ui.price') }}: EUR {{ number_format($article->price,2,',','.')}}</h4>
                    
                    <h5 class="mt-3">{{ __('ui.description') }}:</h5>
                    
                    <p>{{ $article->description }}</p>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</x-layout>