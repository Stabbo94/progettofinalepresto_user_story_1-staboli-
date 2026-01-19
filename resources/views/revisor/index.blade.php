<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">Dashboard dei revisori</h1>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row justify-content-center align-items-start my-3">
                @if ($article_to_check)
                <div class="row justify-content-center pt-5">
                    
                    <div class="col-md-8">
                        <div class="row">
                            
                            @foreach ($article_to_check->images as $key => $image)
                            <div class="col-12 mb-4">
                                <div class="card shadow-sm border-0 overflow-hidden">
                                    <div class="row g-0 align-items-stretch">
                                        <div class="col-md-4">
                                            <img src="{{ $image->getUrl() }}" 
                                            class="img-fluid w-100 h-100" 
                                            style="object-fit: cover;"
                                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article_to_check->title }}">
                                        </div>
                                        
                                        {{-- Colonna Labels --}}
                                        <div class="col-md-4 p-3 border-end">
                                            <h5 class="fw-bold border-bottom pb-2">Labels</h5>
                                            <div class="d-flex flex-wrap gap-1 mt-2">
                                                @if ($image->labels)
                                                @foreach ($image->labels as $label)
                                                <span class="badge bg-dark">#{{ $label }}</span>
                                                @endforeach
                                                @else
                                                <p class="fst-italic text-muted">Nessuna etichetta</p>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="col-md-4 p-3">
                                            <h5 class="fw-bold border-bottom pb-2">Ratings</h5>
                                            <div class="mt-2">
                                                <div class="row justify-content-center-align-items-center mb-2">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->adult }}"></div>
                                                    </div>
                                                    <div class="col-10 small">Adult</div>
                                                </div>
                                                <div class="row justify-content-center-align-items-center mb-2">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->violence }}"></div>
                                                    </div>
                                                    <div class="col-10 small">Violence</div>
                                                </div>
                                                <div class="row justify-content-center-align-items-center mb-2">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->spoof }}"></div>
                                                    </div>
                                                    <div class="col-10 small">Spoof</div>
                                                </div>
                                                <div class="row justify-content-center-align-items-center mb-2">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->racy }}"></div>
                                                    </div>
                                                    <div class="col-10 small">Racy</div>
                                                </div>
                                                <div class="row justify-content-center-align-items-center mb-2">
                                                    <div class="col-2">
                                                        <div class="text-center mx-auto {{ $image->medical }}"></div>
                                                    </div>
                                                    <div class="col-10 small">Medical</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card shadow p-4 sticky-top" style="top: 20px;">
                            <h2 class="fw-bold">{{ $article_to_check->title }}</h2>
                            <p class="text-muted">Autore: {{ $article_to_check->user->name }}</p>
                            <h3 class="text-success fw-bold">€ {{ number_format($article_to_check->price, 2, ',', '.') }}</h3>
                            <span class="badge bg-info text-dark mb-3">#{{ $article_to_check->category->name }}</span>
                            <hr>
                            <p class="text-secondary">{{ $article_to_check->description }}</p>
                            
                            <div class="d-flex justify-content-between gap-2 mt-4">
                                <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST" class="flex-grow-1">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-danger w-100 py-2 fw-bold">Rifiuta</button>
                                </form>
                                <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST" class="flex-grow-1">
                                    @csrf @method('PATCH')
                                    <button class="btn btn-success w-100 py-2 fw-bold">Accetta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @else
                <div class="col-12 text-center py-5">
                    <h2 class="display-5 fst-italic">Non ci sono articoli da revisionare.</h2>
                    <a href="{{ route('homepage') }}" class="btn btn-primary mt-4 px-5">Torna alla Home</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>