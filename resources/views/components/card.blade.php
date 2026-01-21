<div class="card shadow-sm text-center border border-white rounded-4 overflow-hidden bg-transparent h-100 w-100">
    
    <div class="card-img-fixed">
        <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl() : 'https://picsum.photos/300' }}" 
        alt="Immagine dell'articolo {{ $article->title }}">
    </div>
    
    <div class="card-body p-3 d-flex flex-column"> 
        <h6 class="card-title fw-bold text-truncate mb-1 text-white">
            {{ $article->title }}
        </h6>
        
        <p class="card-text text-white fw-light mb-3 small">
            EUR {{ number_format($article->price, 2, ',', '.') }}
        </p>
        
        <div class="d-grid gap-2 col-11 mx-auto mt-auto"> 
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm py-2 small shadow-sm"> 
                {{ __('ui.detail') }}
            </a>
            
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" 
                class="btn btn-outline-info btn-sm py-2 small text-truncate"> 
                {{ __("ui." . $article->category->name) }}
            </a>
        </div>
    </div>
</div>