<div class="card shadow-sm text-center border border-white rounded-4 overflow-hidden bg-transparent h-100 w-100">
    
    <div class="ratio ratio-4x3 card-zoom">
        <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl() : 'https://picsum.photos/300' }}" 
        class="object-fit-cover" 
        alt="Immagine dell'articolo {{ $article->title }}">
    </div>
    
    <div class="card-body p-3 d-flex flex-column"> 
        <h6 class="card-title fw-bold text-truncate mb-1 text-white">
            {{ $article->title }}
        </h6>
        
        <p class="card-text text-white fw-light mb-3 small">
            <span class="fs-5 fw-bold">EUR {{ number_format($article->price, 2, ',', '.') }}</span>
        </p>
        
        <div class="d-grid gap-2 col-12 mt-auto"> 
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm py-2 shadow-sm fw-bold"> 
                {{ __('ui.detail') }}
            </a>
            
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" 
                class="btn btn-outline-info btn-sm py-2 text-truncate border-0"> 
                #{{ __("ui." . $article->category->name) }}
            </a>
        </div>
    </div>
</div>