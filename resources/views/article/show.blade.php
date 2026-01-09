<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-12 text-start">
                <h1 class="display-4 fw-bold text-center">Dettaglio dell'articolo: {{$article->title}}</h1>
            </div>
        </div>
        
        <div class="row justify-content-start py-3">
            <div class="col-12 col-md-4 mb-4">
                <div id="carouselExample" class="carousel slide shadow-sm">
                    <div class="carousel-inner rounded">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/400" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            
            <div class="col-12 col-md-7 text-start ps-md-5">
                <h2 class="display-5"><span class="fw-bold">Titolo: </span>{{ $article->title }}</h2>
                <div class="d-flex flex-column">
                    <h4 class="fw-bold">Prezzo: EUR {{ number_format($article->price,2,',','.')}}</h4>
                    <h5 class="mt-3">Descrizione:</h5>
                    <p>{{ $article->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>