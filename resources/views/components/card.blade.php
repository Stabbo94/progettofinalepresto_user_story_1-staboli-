<div class="card shadow-sm text-center border border-white rounded-4 overflow-hidden bg-transparent h-100 w-100">
    <div class="ratio ratio-1x1">
        <img src="{{ $article->images->isNotEmpty() ? Storage::url($article->images->first()->path) : 'https://picsum.photos/200' }}" 
        class="card-img-top object-fit-cover" 
        alt="Immagine dell'articolo {{ $article->title }}">
    </div>
    
    <div class="card-body p-3 d-flex flex-column"> 
        <h6 class="card-title fw-bold text-truncate mb-1">{{ $article->title }}</h6>
        <p class="card-text text-white fw-light mb-2 small">EUR {{ number_format($article->price,2,',','.')}}</p>
        
        <div class="d-grid gap-2 col-11 mx-auto mt-auto"> 
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary btn-sm py-2 small"> 
                {{ __('ui.detail') }}
            </a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" 
                class="btn btn-outline-info btn-sm py-2 small text-truncate"> 
                {{ __("ui." . $article->category->name) }}
            </a>
        </div>
    </div>
</div>