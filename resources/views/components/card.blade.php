<div class="card mx-auto shadow-sm text-center my-4 border border-white rounded-4 overflow-hidden bg-transparent w-75">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    
    <div class="card-body p-2 d-flex flex-column"> <h6 class="card-title fw-bold text-truncate mb-1">{{ $article->title }}</h6>
        
        <p class="card-text text-white fw-light mb-2 small">EUR {{ number_format($article->price,2,',','.')}}</p>
        
        <div class="d-grid gap-2 col-11 mx-auto mt-auto"> <a href="{{ route('article.show', compact('article')) }}" 
            class="btn btn-primary btn-sm py-2 small"> Dettaglio
        </a>
        <a href="{{ route('byCategory', ['category' => $article->category]) }}" 
            class="btn btn-outline-info btn-sm py-2 small"> {{ $article->category->name }}
        </a>
    </div>
</div>
</div>