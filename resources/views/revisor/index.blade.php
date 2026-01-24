<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center mb-5">
                <h1 class="display-1">Dashboard dei revisori</h1>
            </div>
            
            @if ($article_to_check)
            <div class="col-12 col-lg-11"> <div class="row">
                
                <div class="col-12 col-md-8">
                    @foreach ($article_to_check->images as $key => $image)
                    <div class="card shadow-sm mb-4 overflow-hidden">
                        <div class="row g-0">
                            
                            <div class="col-12 col-md-4">
                                <div class="ratio ratio-1x1 h-100">
                                    <img src="{{ $image->getUrl() }}" class="img-custom-revisor w-100 h-100 object-fit-cover" alt="Immagine {{ $key + 1 }}">
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6 col-md-4 p-3 border-end">
                                <h6 class="fw-bold text-uppercase small border-bottom pb-2">Labels</h6>
                                <div class="d-flex flex-wrap gap-1 mt-2" style="word-break: break-word;">
                                    @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                    <span class="badge bg-secondary">#{{ $label }}</span>
                                    @endforeach
                                    @else
                                    <p class="fst-italic small text-muted">Nessuna etichetta</p>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-12 col-sm-6 col-md-4 p-3">
                                <h6 class="fw-bold text-uppercase small border-bottom pb-2">Ratings</h6>
                                <div class="mt-2">
                                    @php
                                    $categories = ['adult', 'violence', 'spoof', 'racy', 'medical'];
                                    @endphp
                                    @foreach($categories as $category)
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="{{ $image->$category }} me-2" style="width: 12px; height: 12px; border-radius: 50%;"></div>
                                        <span class="small text-capitalize">{{ $category }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <div class="col-12 col-md-4">
                    <div class="card shadow p-4 sticky-md-top" style="top: 2rem;">
                        <h2 class="h4 fw-bold text-break">{{ $article_to_check->title }}</h2>
                        <p class="text-muted small">Autore: {{ $article_to_check->user->name }}</p>
                        <h3 class="text-success">€ {{ number_format($article_to_check->price, 2, ',', '.') }}</h3>
                        <hr>
                        <p class="small text-break">{{ $article_to_check->description }}</p>
                        
                        <div class="d-grid gap-2 mt-4">
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf @method('PATCH')
                                <button class="btn btn-success w-100 fw-bold">Accetta</button>
                            </form>
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf @method('PATCH')
                                <button class="btn btn-danger w-100 fw-bold">Rifiuta</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col-12 text-center py-5">
            <h2 class="display-5 fst-italic">Nessun articolo da revisionare.</h2>
        </div>
        @endif
    </div>
</div>
</x-layout>