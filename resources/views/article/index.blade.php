<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center py-3">
            <div class="col-12">
                <h1 class="display-1">Tutti gli articoli</h1>
            </div>
        </div>
        
        <!-- Area con ultimi 6 articoli e messaggio vuoto -->
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
    </div>
    
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>