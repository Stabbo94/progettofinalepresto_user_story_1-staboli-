<x-layout>
    
    <!-- Area con scritta PRESTO.IT e bottone -->
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12"> 
                <h1 class="display-4">Presto.it</h1>
                
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-md-4">
                        @auth
                        <a class="btn btn-dark w-100 text-center fw-bolder my-5" href="{{route('create.article')}}">
                            Crea un articolo
                        </a>
                        @endauth
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- FINE Area con scritta PRESTO.IT e bottone -->


    <!-- Area con ultimi 6 articoli e messaggio vuoto -->

    <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h2 class="display-1">Articoli in evidenza</h1>
            </div>
        </div>

    <div class="container-fluid text-center">
        <div class="row justify-content-center align-items-center my-3">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        Non sono ancora stati creati articoli
                    </h3>
                </div>
            @endforelse
                
        </div>
    </div>
    <!-- Area con ultimi 6 articoli e messaggio vuoto -->
    
</x-layout>